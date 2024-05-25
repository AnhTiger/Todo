<?php

namespace Modules\Todo\app\Http\Livewire\Pages;

use Livewire\Component;
use Modules\Todo\app\Http\Livewire\Forms\ActionForm;
use Modules\Users\app\Repositories\UserRepositoryInterface;
use Modules\Corporation\app\Repositories\CorporationRepositoryInterface;
use Modules\Company\app\Repositories\CompanyRepositoryInterface;
use Modules\Department\app\Repositories\DepartmentRepositoryInterface;
use Modules\Position\app\Repositories\PositionRepositoryInterface;
use Modules\Team\app\Repositories\TeamRepositoryInterface;
use Modules\Option\app\Repositories\OptionRepositoryInterface;
use Livewire\Attributes\On; 
use Illuminate\Support\Facades\Gate;
use Modules\Admin\app\Libs\Support\Support;
class ActionPage extends Component {

	public ActionForm $form;

	public $first_action_load = 0;
	public $listUser = array();
	public $listTeam = array();
	public $listDepartment = array();
	public $listCompany = array();
	public $listCorporation = array();
	public $listStatusSource = array();
	public $listStatus = array();
	public $listProject = array();
	public $getUserInfo = array();
	public $listClassify = array();
	public $format_form 			= 'create';
	public $format_edit_disabled 	= '';
	public $format_edit_hidden 		= 'hidden';
	public $id = null;
	protected $userRepository,$optionRepository,$corporationRepository,$companyRepository,$departmentRepository,$positionRepository,$teamRepository;

	public $loadingSetting;
	public $getHost = array();
	function __construct()
	{
		$this->getHost = getHost();
		$this->loadingSetting 	= loadingSetting();
	}

	public function boot(
		UserRepositoryInterface $userRepository,
		OptionRepositoryInterface $optionRepository,
		CorporationRepositoryInterface 	$corporationRepository,
		CompanyRepositoryInterface 		$companyRepository,
		DepartmentRepositoryInterface 	$departmentRepository,
		TeamRepositoryInterface 		$teamRepository,
	){
		$this->userRepository		= $userRepository;
		$this->optionRepository		= $optionRepository;
		$this->corporationRepository 	= $corporationRepository;
		$this->companyRepository 		= $companyRepository;
		$this->departmentRepository 	= $departmentRepository;
		$this->teamRepository 			= $teamRepository;
	}

	/* change style action Form*/
	#[On('changeActionTodoFormStyle')]
	public function changeActionTodoFormStyle(){

		$this->loadingSetting->style_action_todo = !$this->loadingSetting->style_action_todo;
		updateLoadingSetting("style_action_todo",$this->loadingSetting->style_action_todo);
		$this->dispatch('resetStepFormAction');
		$this->dispatch('reloadDatePicker');
	}
	
	public function hydrate(){
		
		$this->dispatch('refreshSelect2');
	}

	public function updated($property, $value)
    {
        $this->validateOnly($property);
	}
	public function validateAll()
    {
        $this->validate();
	}
	
	public function checkExistlistTeam(){
		if(empty($this->listTeam)){
			$this->listTeam = $this->teamRepository->getListTeam($this->getUserInfo);	
		}
	}
	public function checkExistlistDepartment(){
		if(empty($this->listDepartment)){
			$this->listDepartment = $this->departmentRepository->getListDepartment($this->getUserInfo);	
		}
	}

	public function checkExistlistCompany(){
		if(empty($this->listCompany)){
			$this->listCompany = $this->companyRepository->getListCompany($this->getUserInfo);	
		}
	}
	public function checkExistlistCorporation(){
		if(empty($this->listCorporation)){
			$this->listCorporation = $this->corporationRepository->getListCorporation($this->getUserInfo);	
		}
	}

	public function checkExistlistUser(){
		if(empty($this->listUser)){
			$this->listUser = $this->userRepository->getListUser($this->getUserInfo);	
		}
	}

	public function checkExistUserInfo(){
		if(empty($this->getUserInfo)){
			$this->getUserInfo =  getUserInfo();
		}
	}


	
	#[On('actionChangeButtonSpiner')] 
    public function actionChangeButtonSpiner($key,$value){

		if(isset($this->form->$key )){
			$this->form->$key = $this->form->$key + $value;
		}

	}
	#[On('loadingMountTagifyTag')] 
    public function loadingMountTagifyTag($data_tag){
		$this->form->tag =  prettyJson($data_tag);
	}

	#[On('loadingMountCreateTodoTable')] 
    public function loadingMountCreateTodoTable($id){

		$this->resetValidation();
		$this->form->reset();
		$this->read_todo = "";
		$this->id = null;
		$this->format_form 	 		= 'create';
		$this->format_edit_disabled	= '';
		$this->format_edit_hidden 	= 'hidden';
		if($id == 0){
			$this->checkExistlistUser();		
			$this->checkExistUserInfo();
			if(!$this->getUserInfo->can('todo-create')){
				return $this->redirect(urlRedirectPrefix($route = 'ignore'), navigate: true);
			}				
			$this->form->getValueByKey($id);
			$this->dispatch('refreshCreateActionFirst')->self();
		}	
			
	}
	#[On('refreshCreateActionFirst')] 
    public function refreshCreateActionFirst(){
		$this->first_action_load = 1;
	}
	#[On('loadingMountEditTodoTable')] 
    public function loadingMountEditTodoTable($id){
		$this->resetValidation();
		$this->form->reset();
		$this->id = $id;
		$this->format_form 	 			= 'edit';
		$this->format_edit_hidden 		= 'disabled';
		$this->format_edit_disabled 	= 'disabled';
		if($id != 0){
			$this->checkExistlistUser();
			$this->checkExistUserInfo();
			if(!$this->getUserInfo->can('todo-update')){
				return $this->redirect(urlRedirectPrefix($route = 'ignore'), navigate: true);
			}				
			$this->dispatch('refreshSelect2ReloadEdit', id: $this->id)->self();						
		}
	}

	#[On('refreshSelect2ReloadEdit')] 
    public function refreshSelect2ReloadEdit($id){
		if($id != 0){		
			$this->form->getValueByKey($id);
			$this->first_action_load = 1;
		}
	}

	#[On('loadingMountShowTodoTable')] 
    public function loadingMountShowTodoTable($id){
		$this->resetValidation();
		$this->form->reset();
		$this->id = $id;
		$this->format_form 	 			= 'show';
		$this->format_edit_hidden 		= 'disabled';
		$this->format_edit_disabled 	= '';
		if($id != 0){
			$this->checkExistlistUser();
			$this->checkExistUserInfo();
			if(!$this->getUserInfo->can('todo-show')){
				return $this->redirect(urlRedirectPrefix($route = 'ignore'), navigate: true);
			}			

			$this->dispatch('refreshSelect2ReloadShow', id: $this->id)->self();						
		}
	}

	#[On('refreshSelect2ReloadShow')] 
    public function refreshSelect2ReloadShow($id){
		if($id != 0){			
			$this->form->getValueByKey($id);
			$this->first_action_load = 1;
		}
	}

	
	public function create() {
		$this->checkExistUserInfo();
		if(!$this->getUserInfo->can('todo-create')){
			return $this->redirect(urlRedirectPrefix($route = 'ignore'), navigate: true);
		}		

		$checkReturn = $this->form->create($this->getUserInfo,$this->loadingSetting);
	
		$this->dispatch('refreshDatatable');
		$this->dispatch('CloseModalAction');
		
		if($checkReturn ){

			$this->dispatch('responseSuccess', __('Successfully created.'));

		}else{
			
			$this->dispatch('responsError', __('False created.'));
		}
	}	
	
	public function edit() {
		$this->checkExistUserInfo();
		if(!$this->getUserInfo->can('todo-update')){
			return $this->redirect(urlRedirectPrefix($route = 'ignore'), navigate: true);
		}			
		$checkReturn = $this->form->edit($this->getUserInfo,$this->loadingSetting);
		$this->dispatch('refreshDatatable');
		$this->dispatch('CloseModalAction');
		if($checkReturn ){

			$this->dispatch('responseSuccess', __('Successfully updated.'));

		}else{
			
			$this->dispatch('responsError', __('False updated.'));
		}	
	}		

	public function show() {
		$this->checkExistUserInfo();
		if(!$this->getUserInfo->can('todo-show')){
			return $this->redirect(urlRedirectPrefix($route = 'ignore'), navigate: true);
		}			
		$checkReturn = $this->form->edit($this->getUserInfo,$this->loadingSetting);
		$this->dispatch('refreshDatatable');
		$this->dispatch('CloseModalAction');
		if($checkReturn ){

			$this->dispatch('responseSuccess', __('Successfully updated.'));

		}else{
			
			$this->dispatch('responsError', __('False updated.'));
		}	
	}	

	public function render() {
		return view('todo::livewire.pages.action-page');
	}
}