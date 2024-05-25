<?php

namespace Modules\Todo\app\Http\Livewire\Forms;

use App\Notifications\Action;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Form;
use Livewire\Attributes\Validate;
use Modules\Todo\app\Models\HistoryTodo;
use Modules\Corporation\app\Repositories\CorporationRepositoryInterface;
use Modules\Company\app\Repositories\CompanyRepositoryInterface;
use Modules\Department\app\Repositories\DepartmentRepositoryInterface;
use Modules\Position\app\Repositories\PositionRepositoryInterface;
use Modules\Team\app\Repositories\TeamRepositoryInterface;
use Modules\Option\app\Repositories\OptionRepositoryInterface;
use Modules\Users\app\Repositories\UserRepositoryInterface;
use Modules\Todo\app\Repositories\TodoRepositoryInterface;
use Modules\Todo\app\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Notification;
use Modules\Users\app\Models\User;
class ActionForm extends Form {

	protected $todoRepository,$corporationRepository,$companyRepository,$departmentRepository,$positionRepository,$teamRepository,$optionRepository,$userRepository;
	public function boot(

		TodoRepositoryInterface 			$todoRepository,
		CorporationRepositoryInterface 	$corporationRepository,
		CompanyRepositoryInterface 		$companyRepository,
		DepartmentRepositoryInterface 	$departmentRepository,
		PositionRepositoryInterface 	$positionRepository,
		TeamRepositoryInterface 		$teamRepository,
		UserRepositoryInterface 		$userRepository,
		OptionRepositoryInterface 		$optionRepository,
		
	) 
	{
		$this->todoRepository 			= $todoRepository;
		$this->corporationRepository 	= $corporationRepository;
		$this->companyRepository 		= $companyRepository;
		$this->departmentRepository 	= $departmentRepository;
		$this->positionRepository 		= $positionRepository;
		$this->teamRepository 			= $teamRepository;
		$this->userRepository 			= $userRepository;
		$this->optionRepository 		= $optionRepository;

	}
    protected function rules(): array
    {
        return (new TodoRequest())->rules($this->id);
    }

    protected function messages(): array
    {
        return (new TodoRequest())->messages();
    }

    protected function validationAttributes(): array
    {
        return (new TodoRequest())->validationAttributes();
    }


	public $time_old = null;
	public $tag_old			= null;
	public $title_old		= null;
	public $tag = '';
	public $title = '';
	public $time = null;
	public $user_id = null;

	public $team_id = null;
	public $department_id = null;
	public $company_id = null;
	public $corporation_id = null;

	public $status = null;
	public $reminder_old = null;
	public $time_interval = 0;
	public $time_interval_old = 0;

	public $time_interval_between_old = 0;
	public $time_interval_between = 0;

	public $time_remaining_old = 0;
	public $time_remaining = 0;
	public $reminder = array();
	public $description = null;
	public $photo_path = null;
	public $created_at = null;
	public $updated_at	 = null;
	public $user_created = null;
	public $user_updated = null;
	public $log = '';
	public $edit_log = '';
	public $id = null;
	public $todoInfo;

	public function getValueByKey($id) {
		if(is_numeric($id)){
			if($id >0){
				$this->todoInfo = $this->todoRepository->find($id);
				$this->id 	= $id;
				if($this->todoInfo){



					$this->time_interval 		= $this->todoInfo->time_interval;
					$this->time_interval_old 	=  $this->todoInfo->time_interval;
					$this->time_remaining_old 	=  $this->todoInfo->time_remaining;
					$this->time_remaining 		=  $this->todoInfo->time_remaining;
					$this->time_interval_between_old 		=  $this->todoInfo->time_interval_between;
					$this->time_interval_between 		=  $this->todoInfo->time_interval_between;
					$this->tag 							=  $this->todoInfo->tag;
					$this->title 						=  $this->todoInfo->title;
					$this->tag_old 							=  $this->todoInfo->tag;
					$this->title_old 						=  $this->todoInfo->title;

					$this->time 			= $this->todoInfo->time;
					$this->time_old 			= $this->todoInfo->time;
					$this->user_id 			= $this->todoInfo->user_id;
					$this->team_id 			= $this->todoInfo->team_id;
					$this->department_id  	= $this->todoInfo->department_id ;
					$this->company_id 		= $this->todoInfo->company_id;
					$this->corporation_id 	= $this->todoInfo->corporation_id;
					$this->status 			= $this->todoInfo->status;
					$this->reminder		= json_decode($this->todoInfo->reminder,true);
					if(is_array($this->reminder)){
						foreach ($this->reminder as $key=> $StatusNetWork){
							$this->reminder[$key] = $StatusNetWork;
						}
					}
					$this->reminder_old			= $this->todoInfo->reminder;
					$this->description 		= $this->todoInfo->description;
					$this->photo_path		= $this->todoInfo->photo_path;
					$this->user_created 	= $this->todoInfo->user_created;
					$this->user_updated 	= $this->todoInfo->user_updated;
					$this->created_at 		= $this->todoInfo->created_at;
					$this->updated_at 		= $this->todoInfo->updated_at;

					$this->log 				= prettyJson($this->todoInfo->log);
					$this->edit_log =  [
						'edit_time'		=> datetime(),
						'time'	=> $this->time,
						'status'	=> $this->status,
						'reminder'	=> $this->reminder,
						'description'	=> $this->description,
					];

				}else{
					session()->flash('error', __('Not found.'));
					return $this->redirect(urlRedirectPrefix($route = 'todo'), navigate: true);
				}
			}else{
				$this->id = null;
			}
		}else{
			$this->id = null;
		}
		
	}

	public function create($getUserInfo,$loadingSetting) {
		$this->validate();

		$check_user_info =    $this->userRepository->find($this->user_id);
		if($check_user_info){

			$this->team_id 			= $check_user_info->team_id;
			$this->position_id 		= $check_user_info->position_id;
			$this->department_id 	= $check_user_info->department_id;
			$this->company_id 		= $check_user_info->company_id;
			$this->corporation_id 	= $check_user_info->corporation_id;

		}
		DB::beginTransaction();
		try {
			$dataCreate = [

				'time'				=> $this->time,
				'user_id'			=> $this->user_id,
				'team_id'			=> $this->team_id,
				'department_id'		=> $this->department_id,
				'company_id' 		=> $this->company_id,
				'corporation_id'	=> $this->corporation_id,
				'status' 			=> $this->status,
				'reminder' 			=> prettyJson($this->reminder),
				'time_interval'		=> $this->time_interval,
				'time_remaining'	=> $this->time_remaining,
				'time_interval_between'	=> $this->time_interval_between,
				'description'		=> $this->description,
				'title'				=> $this->title,
				'tag'				=> prettyJson($this->tag),
				'photo_path'		=> $this->photo_path,
				'created_at'	=> datetime(),
				'updated_at'	=> null,
				'user_created'	=> $getUserInfo->code,
				'user_updated'	=> null,
				'log'			=> "",
			];
			$create = $this->todoRepository->create($dataCreate);
			if($create){			

					DB::commit();
					$action_log_gloabl = "create";
					$menu_log_gloabl = "todo";
					$status_log_gloabl = 1;
					$reason_log_gloabl = "";
					$user_created = $getUserInfo;
					createLogAction($action_log_gloabl,$menu_log_gloabl,$status_log_gloabl,$reason_log_gloabl,$user_created);


						$management_info = User::find($this->user_id);
						if($management_info){
							$management_info = $management_info->name;
						}else{
							$management_info = "Không xác định";
						}
						
						$arrayUserNotification 			= array_unique(array_merge([$this->user_id],[ $getUserInfo->id],[$this->user_id],userCanActionTodo()));
						$dataNotification   			= new \stdClass;
						$dataNotification->title  		= $loadingSetting->dataNotification_title." ".__('Todo list management');
						$dataNotification->message  	= $loadingSetting->dataNotification_message." "."Todo list được tạo mới bởi ".$getUserInfo->name." - ".$getUserInfo->code.".<br> Quản lý của Todo ".$management_info;
						$dataNotification->classify  	= "create";
						$dataNotification->model  		= "todo";
						$dataNotification->user_id		= $arrayUserNotification;
						$dataNotification->role  		= "todo-index";
						$dataNotification->path  		= route('admin.todo.index',['id'=>$create->id],true);
						$dataNotification->link  		= route('admin.todo.index',['id'=>$create->id],true);
						$dataNotification->leader		= $this->user_id;
						$dataNotification->member		= [$this->user_id];
						$dataNotification->change_log	= [];
						$dataNotification->user_create	= $getUserInfo->id;
						$dataNotification->log 	 		= json_encode($this->edit_log, JSON_PRETTY_PRINT);
						sendNotificationEvent($arrayUserNotification,$dataNotification,$loadingSetting);


						return $create;

			}else{
				DB::rollback();
				$action_log_gloabl = "create";
				$menu_log_gloabl = "todo";
				$status_log_gloabl = 0;
				$reason_log_gloabl = "Không thể tạo mới bản ghi";
				$user_created = $getUserInfo;
				createLogAction($action_log_gloabl,$menu_log_gloabl,$status_log_gloabl,$reason_log_gloabl,$user_created);
				return false;
			}
		} catch (\Exception $e) {
			Log::error($e->getMessage() . json_encode($e->getTrace()));
			DB::rollback();
			$action_log_gloabl = "create";
			$menu_log_gloabl = "todo";
			$status_log_gloabl = 0;
			$reason_log_gloabl = "Không thể tạo transaction";
			$user_created = $getUserInfo;
			createLogAction($action_log_gloabl,$menu_log_gloabl,$status_log_gloabl,$reason_log_gloabl,$user_created);
			return false;
		}
	}

	public function edit($getUserInfo,$loadingSetting) {
		$this->validate();
		if(!($this->log == "" || $this->log == null)){
			$this->log = json_decode($this->log, TRUE);
			$this->edit_log = [$this->log,$this->edit_log];
		}

		DB::beginTransaction();	
		try {
			$dataUpdate = [

				'time'				=> $this->time,
				'user_id'			=> $this->user_id,
				'team_id'			=> $this->team_id,
				'department_id'		=> $this->department_id,
				'company_id' 		=> $this->company_id,
				'time_interval'		=> $this->time_interval,
				'time_remaining'	=> $this->time_remaining,
				'time_interval_between'	=> $this->time_interval_between,
				'corporation_id'	=> $this->corporation_id,
				'status' 			=> $this->status,
				'reminder' 			=> prettyJson($this->reminder),
				'description'		=> $this->description,
				'title'				=> $this->title,
				'tag'				=> prettyJson($this->tag),
				'photo_path'		=> $this->photo_path,
				'updated_at'	=> datetime(),
				'user_updated'	=> $getUserInfo->code,
				'log'			=> json_encode($this->edit_log, JSON_PRETTY_PRINT),
			];

			$update = $this->todoRepository->update($this->id, $dataUpdate);

			if($update){		
				$checkEdit = 0;
				$change_log = array();
				if($this->time != $this->time_old){
					$checkEdit ++;

					$change_log[] = 'time';
				}
				if($this->reminder != $this->reminder_old){
					$checkEdit ++;

					$change_log[] = 'reminder';
				}
				if($this->time_interval != $this->time_interval_old){
					$checkEdit ++;

					$change_log[] = 'time_interval';
				}
				if($this->time_remaining != $this->time_remaining_old){
					$checkEdit ++;

					$change_log[] = 'time_remaining';
				}

				if($this->tag != $this->tag_old){
					$checkEdit ++;

					$change_log[] = 'tag';
				}
				if($this->title != $this->title_old){
					$checkEdit ++;

					$change_log[] = 'title';
				}
				if($checkEdit>0){
					DB::commit();

					$action_log_gloabl = "update";
					$menu_log_gloabl = "todo";
					$status_log_gloabl = 1;
					$reason_log_gloabl = "Sửa thành công";
					$user_created = $getUserInfo;
					createLogAction($action_log_gloabl,$menu_log_gloabl,$status_log_gloabl,$reason_log_gloabl,$user_created);

					$management_info = User::find($this->user_id);
					if($management_info){
						$management_info = $management_info->name;
					}else{
						$management_info = "Không xác định";
					}
					
					$arrayUserNotification 			= array_unique(array_merge([$this->user_id],[ $getUserInfo->id],[$this->user_id],userCanActionTodo()));
					$dataNotification   			= new \stdClass;
					$dataNotification->title  		= $loadingSetting->dataNotification_title." ".__('Todo list management');
					$dataNotification->message  	= $loadingSetting->dataNotification_message." "."Todo list được tạo mới bởi ".$getUserInfo->name." - ".$getUserInfo->code.".<br> Quản lý của Todo ".$management_info;
					$dataNotification->classify  	= "create";
					$dataNotification->model  		= "todo";
					$dataNotification->user_id		= $arrayUserNotification;
					$dataNotification->role  		= "todo-index";
					$dataNotification->path  		= route('admin.todo.index',['id'=>$update->id],true);
					$dataNotification->link  		= route('admin.todo.index',['id'=>$update->id],true);
					$dataNotification->leader		= $this->user_id;
					$dataNotification->member		= [$this->user_id];
					$dataNotification->change_log	= $change_log;
					$dataNotification->user_create	= $getUserInfo->id;
					$dataNotification->log 	 		= json_encode($this->edit_log, JSON_PRETTY_PRINT);
					sendNotificationEvent($arrayUserNotification,$dataNotification,$loadingSetting);

					return $update;
				}else{
					
					DB::commit();
					$action_log_gloabl = "update";
					$menu_log_gloabl = "todo";
					$status_log_gloabl = 1;
					$reason_log_gloabl = "Sửa thành công";
					$user_created = $getUserInfo;
					createLogAction($action_log_gloabl,$menu_log_gloabl,$status_log_gloabl,$reason_log_gloabl,$user_created);


					$management_info = User::find($this->user_id);
					if($management_info){
						$management_info = $management_info->name;
					}else{
						$management_info = "Không xác định";
					}
					
					$arrayUserNotification 			= array_unique(array_merge([$this->user_id],[ $getUserInfo->id],[$this->user_id],userCanActionTodo()));
					$dataNotification   			= new \stdClass;
					$dataNotification->title  		= $loadingSetting->dataNotification_title." ".__('Todo list management');
					$dataNotification->message  	= $loadingSetting->dataNotification_message." "."Todo list được tạo mới bởi ".$getUserInfo->name." - ".$getUserInfo->code.".<br> Quản lý của Todo ".$management_info;
					$dataNotification->classify  	= "create";
					$dataNotification->model  		= "todo";
					$dataNotification->user_id		= $arrayUserNotification;
					$dataNotification->role  		= "todo-index";
					$dataNotification->path  		= route('admin.todo.index',['id'=>$update->id],true);
					$dataNotification->link  		= route('admin.todo.index',['id'=>$update->id],true);
					$dataNotification->leader		= $this->user_id;
					$dataNotification->member		= [$this->user_id];
					$dataNotification->change_log	= $change_log;
					$dataNotification->user_create	= $getUserInfo->id;
					$dataNotification->log 	 		= json_encode($this->edit_log, JSON_PRETTY_PRINT);
					sendNotificationEvent($arrayUserNotification,$dataNotification,$loadingSetting);

					return $update;
				}

			}else{
				
				DB::rollback();
				$action_log_gloabl = "update";
				$menu_log_gloabl = "todo";
				$status_log_gloabl = 0;
				$reason_log_gloabl = "Không thể sửa bản ghi";
				$user_created = $getUserInfo;
				createLogAction($action_log_gloabl,$menu_log_gloabl,$status_log_gloabl,$reason_log_gloabl,$user_created);
				return false;
			}

		} catch (\Exception $e) {
			Log::error($e->getMessage() . json_encode($e->getTrace()));
			DB::rollback();
			$action_log_gloabl = "update";
			$menu_log_gloabl = "todo";
			$status_log_gloabl = 0;
			$reason_log_gloabl = "Không thể tạo transaction";
			$user_created = $getUserInfo;
			createLogAction($action_log_gloabl,$menu_log_gloabl,$status_log_gloabl,$reason_log_gloabl,$user_created);
			return false;
		}
	}

	public function show($getUserInfo,$loadingSetting) {
	}

}