<?php

namespace Modules\Todo\app\Http\Livewire\Pages;
use Livewire\Component;
use Modules\Todo\app\Models\Todo;
use Livewire\Attributes\On; 
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\DB;
use Modules\Corporation\app\Repositories\CorporationRepositoryInterface;
use Modules\Company\app\Repositories\CompanyRepositoryInterface;
use Modules\Department\app\Repositories\DepartmentRepositoryInterface;
use Modules\Position\app\Repositories\PositionRepositoryInterface;
use Modules\Team\app\Repositories\TeamRepositoryInterface;
use Modules\Option\app\Repositories\OptionRepositoryInterface;
use Modules\Users\app\Repositories\UserRepositoryInterface;
use Modules\Todo\app\Repositories\TodoRepositoryInterface;
use Modules\UserPriority\app\Repositories\UserPriorityRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Modules\Admin\app\Models\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Jenssegers\Agent\Facades\Agent;
use Livewire\Attributes\Session;
class IndexPage extends Component {

	use WithFileUploads;
	use WithPagination, WithoutUrlPagination; 
	protected $paginationTheme = 'bootstrap';
	public $loadingSetting = array();
	public $selected = array();
	public $selected_status = false;
	// searchinng id
	public $search_user_id = array();	
	public $search_user_created = array();	
	public $search_team_id = array();
	public $search_department_id = array();
	public $search_position_id = array();
	public $search_company_id = array();
	public $search_corporation_id = array();
	public $search_date_from = null;
	public $search_date_to = null;
	public $search_status = "";
	public $search_interface_type = null;
	public $search_todo_from = null;
	public $search_todo_to = null;
	
	public $search_table_style = null;
	public $search_pagination_type = null;

	// searchinng array

	public $getUserInfo;
	public $getListNetWork;
	public $getListStatusWork;
	public $getlistTeam = array();
	public $getlistCorporation = array();
	public $getlistCompany = array();
	public $getlistDepartment = array();
	public $getlistPosition = array();
	public $getlistUser = array();	
	public $getListStatusTodoSource = array();	
	public $getListStatus = array();

	// loading info
	public $check_more_info =  null;
	public $check_more_info_actived =  "";
	public $check_more_info_actived_value =  "";
	public $check_more_info_user_update =  null;
	public $check_device_isMobile =  null;	
	public $check_device_isTablet =  null;

	#[Session] 
	public $search =  "";
	public $order_by_priority = "";
	public $listCorporationPriority = array();
	public $listCompanyPriority = array();
	public $listDepartmentPriority = array();
	public $listTeamPriority = array();
	public $listUserPriority = array();

	public $getIDUserPriority = array();
	public $getIDTeamPriority = array();
	public $getIDDepartmentPriority = array();
	public $getIDCompanyPriority = array();
	public $getIDCorporationPriority = array();
	//edit coloumn
	public $paginate =  array();
	public $show_hide_column =  array();
	public $table_todo_column_default = array();
	public $table_todo_key_order_default = array();
	public $bulk_action = null;
	public $column_sorting_show_hide = array();
	public $search_column_sorting_show_hide = array();
	
	public $layout_table_todo_search_div = "";
	public $layout_table_todo_card_div = "";
	
	function __construct()
	{
		$this->loadingSetting 	= loadingSetting();
		$this->table_todo_column_default =  $this->loadingSetting->table_todo_column;
		$this->table_todo_key_order_default =  $this->loadingSetting->table_todo_key_order;
		$this->search_table_style = $this->loadingSetting->table_todo_table_style;
		$check_device = new \Jenssegers\Agent\Agent;
	 	$this->check_device_isMobile =  $check_device->isMobile();
		$this->check_device_isTablet =  $check_device->isTablet();
		$this->layout_table_todo_search_div = checkLayOutMaster("layout_table_todo_search_div",$this->loadingSetting);
		$this->layout_table_todo_card_div = checkLayOutMaster("layout_table_todo_card_div",$this->loadingSetting);
	}

	public $nameOfTable;
	public $columnTable;
	public $id_become_orther = array();
	function mount(){

		$id_become_orther = request('id');
		if(is_numeric($id_become_orther )){
			$this->id_become_orther = [$id_become_orther];
		}
        $this->getUserInfo    		=  getUserInfo();

		if(isset($this->loadingSetting->table_todo_search['corporation_id'])){
			$this->getlistCorporation 	= $this->corporationRepository->getListCorporation($this->getUserInfo);
		}

		if(isset($this->loadingSetting->table_todo_search['company_id'])){
			$this->getlistCompany 		= $this->companyRepository->getListCompany($this->getUserInfo);
		}

		if(isset($this->loadingSetting->table_todo_search['department_id'])){
			$this->getlistDepartment 	= $this->departmentRepository->getListDepartment($this->getUserInfo);
		}

		if(isset($this->loadingSetting->table_todo_search['position_id'])){
			$this->getlistPosition 		= $this->positionRepository->getListPosition($this->getUserInfo);
		}
		if(isset($this->loadingSetting->table_todo_search['user_id']) ||isset($this->loadingSetting->table_todo_search['user_create']) ){
			$this->getlistUser 			= $this->userRepository->getListUser($this->getUserInfo);
		}

		if(isset($this->loadingSetting->table_todo_search['team_id'])){
			$this->getlistTeam 			= $this->teamRepository->getListTeam($this->getUserInfo);
		}
		
		$this->getIDUserPriority 			= $this->userPriorityRepository->getIDUserPriority($this->getUserInfo,route('admin.todo.index'));
		foreach($this->getIDUserPriority as $value){

			$this->listUserPriority[] = $value->user_id;
			$this->order_by_priority .= '"'.$value->user_id.'",';
		}
        		
		if (substr($this->order_by_priority, -1) == ","){
			$this->order_by_priority =  substr($this->order_by_priority, 0, -1);									
		}	
		
		$this->columnTable 			=(new Todo)->getfillable();
		$this->nameOfTable 			=(new Todo)->gettable();
		foreach	($this->loadingSetting->table_todo_column as  $key => $row){
			
			if (isset($this->loadingSetting->table_todo_column[$key])) {

				if($this->loadingSetting->table_todo_column[$key] != 'd-none'){
					
					$this->column_sorting_show_hide[$key]=true;
				}else{
					$this->column_sorting_show_hide[$key]=false;
				}

			}else{

				$this->column_sorting_show_hide[$key]=false;
			}
		}

		foreach	($this->loadingSetting->table_todo_search as  $key => $row){
			
			if (isset($this->loadingSetting->table_todo_search[$key])) {

				if($this->loadingSetting->table_todo_search[$key] != 'd-none'){
					
					$this->search_column_sorting_show_hide[$key]=true;
				}else{
					$this->search_column_sorting_show_hide[$key]=false;
				}

			}else{

				$this->search_column_sorting_show_hide[$key]=false;
			}
		}

		if($this->loadingSetting->table_todo_compact_search == 1 && $this->loadingSetting->table_todo_table_position_search == 0){
			$this->search_interface_type = 0;
		}else if($this->loadingSetting->table_todo_compact_search == 1 && $this->loadingSetting->table_todo_table_position_search == 1){
			$this->search_interface_type = 1;
		}else if($this->loadingSetting->table_todo_compact_search == 0 && $this->loadingSetting->table_todo_table_position_search == 0){
			$this->search_interface_type = 2;
		}else if($this->loadingSetting->table_todo_compact_search == 0 && $this->loadingSetting->table_todo_table_position_search == 0){
			$this->search_interface_type = 3;
		}

		$this->search_pagination_type = $this->loadingSetting->table_todo_pagination_type;

	}
	public function hydrate(){
		
		$this->dispatch('refreshSelect2Table');
		$this->dispatch('refreshPopover');
		$this->dispatch('reloadDatePicker');

	}
	/* Updated  */
	public function updated($property, $value)
    {
		if($property == 'search_interface_type'){
			if($value ==  0){
				$this->loadingSetting->table_todo_compact_search = 1;
				$this->loadingSetting->table_todo_table_position_search = 0;
				updateLoadingSetting("table_todo_compact_search",1);
				updateLoadingSetting("table_todo_table_position_search",0);
			}else if($value ==  1){
				$this->loadingSetting->table_todo_compact_search = 1;
				$this->loadingSetting->table_todo_table_position_search = 1;
				updateLoadingSetting("table_todo_compact_search",1);
				updateLoadingSetting("table_todo_table_position_search",1);
			}else if($value ==  2){
				$this->loadingSetting->table_todo_compact_search = 0;
				$this->loadingSetting->table_todo_table_position_search = 0;
				updateLoadingSetting("table_todo_compact_search",0);
				updateLoadingSetting("table_todo_table_position_search",0);
			}else if($value ==  3){
				$this->loadingSetting->table_todo_compact_search = 0;
				$this->loadingSetting->table_todo_table_position_search = 1;
				updateLoadingSetting("table_todo_compact_search",0);
				updateLoadingSetting("table_todo_table_position_search",1);
			}
			return  redirect(request()->header('Referer'));
		}elseif($property == 'search_table_style'){
			if(!($value == null || $value == "" || $value == "null")){
				updateLoadingSetting("table_todo_table_style",$value);
				return  redirect(request()->header('Referer'));
			}

		}elseif($property == 'search_pagination_type'){
			if(!($value == null || $value == "" || $value == "null")){
				updateLoadingSetting("table_todo_pagination_type",$value);
				return  redirect(request()->header('Referer'));
			}
		}
	}
	#[On('markTodo')]
	public function markTodo($id){
		if(Todo::where('id','=',$id)->whereNull('read_at')->update(['read_at'=>now()])){
			$this->dispatch('responseSuccess', __('Successfully updated'));
		}else{
			$this->dispatch('responsError', __('False updated (Maybe read).'));
		}
	}
	/* chang style compact table */
	#[On('changeTodoStyleCompactIconShow')]
	public function changeTodoStyleCompactIconShow(){
		$this->loadingSetting->table_todo_compact_icon_show = !$this->loadingSetting->table_todo_compact_icon_show;
		updateLoadingSetting("table_todo_compact_icon_show",$this->loadingSetting->table_todo_compact_icon_show);
	}
	
	/* Bulk Action */
	#[On('bulkAction')]
	public function bulkAction($key){

		if($key == "export"){
			$this->dispatch('exportToExcel');
		}else if($key == "import"){

			$this->dispatch('importFromExcel');

		}else if($key == "delete"){

			$this->dispatch('deleteMutil');

		}else if($key == "activated"){

			$this->dispatch('activatedMutil');

		}else if($key == "deactivated"){

			$this->dispatch('deactivatedMutil');

		}
	}

	/* Show or hide column */
	#[On('updatedColumnShowHide')]
	public function updatedColumnShowHide($key){

		if (isset($this->loadingSetting->table_todo_column[$key])) {
		
			if($this->loadingSetting->table_todo_column[$key] == 'd-none'){
		
				$this->loadingSetting->table_todo_column[$key] = 'nk-tb-col';
				
			}else{

				$this->loadingSetting->table_todo_column[$key] = 'd-none';

			}
			updateLoadingSetting("table_todo_column",$this->loadingSetting->table_todo_column);
		}	
	}

	
	/* Show or hide search column */
	#[On('updatedSearchShowHide')]
	public function updatedSearchShowHide($key){

		if (isset($this->loadingSetting->table_todo_search[$key])) {
		
			if($this->loadingSetting->table_todo_search[$key] == 'd-none'){
			
				$this->loadingSetting->table_todo_search[$key] = 'd-block';
				
			}else{
				$this->loadingSetting->table_todo_search[$key] = 'd-none';
			}
			updateLoadingSetting("table_todo_search",$this->loadingSetting->table_todo_search);
		}	
	}
	
	/* Show all column */
	#[On('columnShowAll')]
	public function  columnShowAll() {
	
		foreach ($this->loadingSetting->table_todo_column as $column=>$row){
			
			if (isset($this->loadingSetting->table_todo_column[$column])) {

				$this->loadingSetting->table_todo_column[$column] = 'nk-tb-col';
	
			}else{
				$this->loadingSetting->table_todo_column[] = [$column =>'nk-tb-col'];
			}
		
			if (isset($this->column_sorting_show_hide[$column])) {

				$this->column_sorting_show_hide[$column] = true;
			}
		}
		updateLoadingSetting("table_todo_column",$this->loadingSetting->table_todo_column);

	}

	/* Hide all column */
	#[On('columnHideAll')]
	public function columnHideAll() {

		foreach ($this->loadingSetting->table_todo_column as $column=>$row){

			if (isset($this->loadingSetting->table_todo_column[$column])) {

				$this->loadingSetting->table_todo_column[$column] = 'd-none';
			}
							
			if (isset($this->column_sorting_show_hide[$column])) {

				$this->column_sorting_show_hide[$column] = false;
			}
		}
		updateLoadingSetting("table_todo_column",$this->loadingSetting->table_todo_column);
	}

	/* reset coloum show hide*/
	#[On('columnReset')]
	public function columnReset() {
		$this->loadingSetting = loadingSettingDefault();
		return  redirect(request()->header('Referer'));
	}

	/* apply column sorting*/
	#[On('applyColumnSorting')]
	public function applyColumnSorting($data) {

		if(is_array($data)){
			$current_table_todo_column = $this->loadingSetting->table_todo_column;
			$current_column_sorting_show_hide = $this->column_sorting_show_hide;
			$this->loadingSetting->table_todo_column = array();
			$this->column_sorting_show_hide = array();
			foreach ($data as $column){

				if (isset($current_table_todo_column[$column])) {
	
					$this->loadingSetting->table_todo_column[$column] = $current_table_todo_column[$column];
				}
				if (isset($column,$current_column_sorting_show_hide[$column])) {
	
					$this->column_sorting_show_hide[$column] = $current_column_sorting_show_hide[$column];
				}
			}
			updateLoadingSetting("table_todo_column",$this->loadingSetting->table_todo_column);
		}

	}

	/* set order column*/	
	#[On('orderColumn')]
	public function orderColumn($key) {

		if(isset($this->loadingSetting->table_todo_key_order[$key])){
			
			if($this->loadingSetting->table_todo_key_order[$key] == 'd-none'){
				$this->loadingSetting->table_todo_key_order[$key] = $this->loadingSetting->table_todo_key_order_default;
			}elseif($this->loadingSetting->table_todo_key_order[$key] == 'desc'){
				$this->loadingSetting->table_todo_key_order[$key] = 'asc';
			}elseif($this->loadingSetting->table_todo_key_order[$key] == 'asc'){
				$this->loadingSetting->table_todo_key_order[$key] = 'desc';
			}
			updateLoadingSetting("table_todo_key_order",$this->loadingSetting->table_todo_key_order);
		}
	}

	/* reset all order column*/	
	#[On('resetOrderColumn')]
	public function resetOrderColumn() {

		$this->loadingSetting->table_todo_key_order = $this->table_todo_key_order_default;
		foreach($this->getIDUserPriority as $value){
			$this->order_by_priority .= '"'.$value->user_id.'",';
		}
		if (substr($this->order_by_priority, -1) == ","){
			$this->order_by_priority =  substr($this->order_by_priority, 0, -1);									
		}
	}

	/* remove all order column*/	
	#[On('removeOrderColumn')]
	public function removeOrderColumn() {

		foreach($this->loadingSetting->table_todo_key_order as $key => $value){
			$this->loadingSetting->table_todo_key_order[$key] = 'd-none';
		}
		$this->order_by_priority = "";
	}

	/* set perPage  */	
	#[On('paginate')]
	public function paginate($id) {
		$this->loadingSetting->table_todo_perPage =  $id;
		updateLoadingSetting("table_todo_perPage",$id);
		if($this->loadingSetting->table_todo_table_style == 2){
			return  redirect(request()->header('Referer'));
		}else{
			$this->dispatch('refreshDatatable');
		}
	}

	/* reset filter select input */	
	#[On('resetFilter')]
	public function resetFilter() {
		$this->search_user_id = array();
		$this->search_user_created = array();
		$this->search_team_id = array();
		$this->search_department_id = array();
		$this->search_position_id = array();
		$this->search_company_id = array();
		$this->search_corporation_id = array();
		$this->search_status = "";
		$this->search_todo_from = null;
		$this->search_todo_to = null;
		$this->search_date_from = null;
		$this->search_date_to = null;
	}
	/* set default all value */	
	#[On('setAsDefault')]
	public function setAsDefault() {

	}
	/* get all id from selected */	
	#[On('selectMutilId')]
	public function selectMutilId() {
		if($this->search != ""){

			$strtotime_search = strtotime($this->search);
			if($strtotime_search){
				$strtotime_search = date ( 'Y-m-d' ,$strtotime_search);
				$listTodo = Todo::wherenotnull($this->nameOfTable.'.user_id')->search($strtotime_search);
			}else{
				$listTodo = Todo::wherenotnull($this->nameOfTable.'.user_id')->search($this->search);
			}

		}else{
			$listTodo = Todo::wherenotnull($this->nameOfTable.'.user_id');
		}
		if(is_array($this->id_become_orther)){
			if(!empty($this->id_become_orther)){
				$listTodo->whereIn($this->nameOfTable.'.id',$this->id_become_orther);
			}
		}

		if(is_array($this->search_user_id)){
			if(!empty($this->search_user_id)){
	
				$listTodo->whereIn($this->nameOfTable.'.user_id',$this->search_user_id);
			}
		}


		$strtotime_from = strtotime($this->search_todo_from);
		$strtotime_to = strtotime($this->search_todo_to);
		if($strtotime_from){
				$listTodo->where($this->nameOfTable.'.time','>=',date ( 'Y-m-d H:i:00' ,$strtotime_from));
		}
		if($strtotime_to){
				$listTodo->where($this->nameOfTable.'.time','<=',date ( 'Y-m-d H:i:59' ,$strtotime_to));
		}

		if(is_array($this->search_status)){
			if(!empty($this->search_status)){
	
				$listTodo->whereIn($this->nameOfTable.'.status',$this->search_status);
			}
		}

		$count_order = 0;
		if($this->order_by_priority !=""){
			$listTodo->orderByRaw("FIELD(user_id, $this->order_by_priority ) DESC ");
			$count_order ++;
		}
		if(is_array($this->loadingSetting->table_todo_key_order)){
			foreach($this->loadingSetting->table_todo_key_order as $key=>$value){
				if($value == "desc" || $value == "asc"){
					$listTodo->orderBy($this->nameOfTable.".".$key,$value);
					$count_order ++;
				}
			}
		}
		if($count_order  == 0){

			$listTodo->orderBy($this->nameOfTable.".id","desc");

		}
		$listTodo = $listTodo->select('id')->get();
		$this->selected = array();
		foreach($listTodo as $item){
			if($this->selected_status == false){

				$this->selected[$item->id] = false;

			}else{

				$this->selected[$item->id] = true;
			} 
		}
	}

	/* reset table */		
	#[On('refreshDatatable')] 
    public function refreshDatatable(){
		$this->resetPage();
	}

	protected $todoRepository,$corporationRepository,$companyRepository,$departmentRepository,$positionRepository,$teamRepository,$optionRepository,$userRepository,$userPriorityRepository;
	public function boot(

		TodoRepositoryInterface 	$todoRepository,
		CorporationRepositoryInterface 	$corporationRepository,
		CompanyRepositoryInterface 		$companyRepository,
		DepartmentRepositoryInterface 	$departmentRepository,
		PositionRepositoryInterface 	$positionRepository,
		TeamRepositoryInterface 		$teamRepository,
		UserRepositoryInterface 		$userRepository,
		OptionRepositoryInterface 		$optionRepository,		
		UserPriorityRepositoryInterface $userPriorityRepository,
	) 
	{
		$this->todoRepository 		= $todoRepository;
		$this->corporationRepository 	= $corporationRepository;
		$this->companyRepository 		= $companyRepository;
		$this->departmentRepository 	= $departmentRepository;
		$this->positionRepository 		= $positionRepository;
		$this->teamRepository 			= $teamRepository;
		$this->userRepository 			= $userRepository;
		$this->optionRepository 		= $optionRepository;
		$this->userPriorityRepository	= $userPriorityRepository;
	}
	/* loadingm all infomation */
	#[On('resetCheckMoreInfo')] 
	public function resetCheckMoreInfo(){
		$this->check_more_info = null;
	}	
	
	#[On('loadingCommonInfo')] 
    public function loadingCommonInfo($id,$custom){


		$this->check_more_info = new \stdClass();
		$todoInfo = null;
		$todoInfo	= $this->todoRepository->getTodo($id);

		if($todoInfo == null){
			exit;
		}

		$this->check_more_info_actived 			=  "user_name";
		$check_user_info_table 					= $this->userRepository->find($todoInfo->user_id);

		if($check_user_info_table){
			$check_corporation_info_table 		= $this->corporationRepository->find($check_user_info_table->corporation_id);
			$check_company_info_table 			= $this->companyRepository->find($check_user_info_table->company_id);
			$check_position_info_table 			= $this->positionRepository->find($check_user_info_table->position_id);
			$check_department_info_table 		= $this->departmentRepository->find($check_user_info_table->department_id);
			$check_team_info_table 				= $this->teamRepository->find($check_user_info_table->team_id);
		}
		$checkBelongUserInculue					= $this->userRepository->getListUserByUser($todoInfo->user_id);
		$this->check_more_info->checkBelongUserInculue = $checkBelongUserInculue;
		/*-- Get Info all Org --*/
		if(isset($check_department_info_table)){

			$this->check_more_info->department_id					= $check_department_info_table->id;
			$this->check_more_info->department_name					= $check_department_info_table->name;
			$this->check_more_info->department_lead					= $check_department_info_table->leader->name;
			$this->check_more_info->department_description			= $check_department_info_table->description;
			$this->check_more_info->department_birth_day			= $check_department_info_table->birth_day;
			$this->check_more_info->department_profile_photo_path	= $check_department_info_table->profile_photo_path;
			$this->check_more_info->department_email				= $check_department_info_table->email;
			$this->check_more_info->department_phone				= $check_department_info_table->phone;
			$this->check_more_info->department_address				= $check_department_info_table->address;

		}
		if(isset($check_team_info_table)){

			$this->check_more_info->team_id						= $check_team_info_table->id;
			$this->check_more_info->team_name					= $check_team_info_table->name;
			$this->check_more_info->team_lead					= $check_team_info_table->leader->name;
			$this->check_more_info->team_description			= $check_team_info_table->description;
			$this->check_more_info->team_birth_day				= $check_team_info_table->birth_day;
			$this->check_more_info->team_profile_photo_path		= $check_team_info_table->profile_photo_path;
			$this->check_more_info->team_email					= $check_team_info_table->email;
			$this->check_more_info->team_phone					= $check_team_info_table->phone;
			$this->check_more_info->team_address				= $check_team_info_table->address;

		}

		if(isset($check_company_info_table)){

			$this->check_more_info->company_id					= $check_company_info_table->id;
			$this->check_more_info->company_name				= $check_company_info_table->name;
			$this->check_more_info->company_lead				= $check_company_info_table->leader->name;
			$this->check_more_info->company_description			= $check_company_info_table->description;
			$this->check_more_info->company_birth_day			= $check_company_info_table->birth_day;
			$this->check_more_info->company_profile_photo_path	= $check_company_info_table->profile_photo_path;
			$this->check_more_info->company_email				= $check_company_info_table->email;
			$this->check_more_info->company_phone				= $check_company_info_table->phone;
			$this->check_more_info->company_address				= $check_company_info_table->address;

		}
		if(isset($check_corporation_info_table)){
			$this->check_more_info->corporation_id					= $check_corporation_info_table->id;
			$this->check_more_info->corporation_name				= $check_corporation_info_table->name;
			$this->check_more_info->corporation_lead				= $check_corporation_info_table->leader->name;
			$this->check_more_info->corporation_description			= $check_corporation_info_table->description;
			$this->check_more_info->corporation_birth_day			= $check_corporation_info_table->birth_day;
			$this->check_more_info->corporation_profile_photo_path	= $check_corporation_info_table->profile_photo_path;
			$this->check_more_info->corporation_email				= $check_corporation_info_table->email;
			$this->check_more_info->corporation_phone				= $check_corporation_info_table->phone;
			$this->check_more_info->corporation_address				= $check_corporation_info_table->address;
		}

		if(isset($check_position_info_table)){
			$this->check_more_info->position_name				= $check_position_info_table->name;
			$this->check_more_info->position_id					= $check_position_info_table->id;
		}

		if(isset($check_user_info_table)){
			$this->check_more_info->user_id 					= $check_user_info_table->id;
			$this->check_more_info->user_name 					= $check_user_info_table->name;
			$this->check_more_info->user_sex					= $check_user_info_table->sex;
			$this->check_more_info->user_phone 					= $check_user_info_table->phone;
			$this->check_more_info->user_email 					= $check_user_info_table->email;
			$this->check_more_info->user_address 				= $check_user_info_table->address;
			$this->check_more_info->user_birth_day 				= $check_user_info_table->birth_day;
			$this->check_more_info->user_description 			= $check_user_info_table->description;
			$this->check_more_info->user_profile_photo_path		= $check_user_info_table->profile_photo_path;
		}

		/*-- End --*/
	}

	/* get usser Info update/create */

	#[On('resetuserActionInfo')] 
	public function resetuserActionInfo(){
		$this->check_more_info_user_update = null;
	}


	#[On('userActionInfo')] 
    public function userActionInfo($code,$custom){

		$this->check_more_info_user_update = new \stdClass();
		$check_user_info_table 				= $this->userRepository->getInfoUserByCode($code);
		/*-- Get Info all Org --*/
		if(isset($check_user_info_table)){
			$this->check_more_info_user_update->user_id						= $check_user_info_table->id;
			$this->check_more_info_user_update->user_name 					= $check_user_info_table->name;
			$this->check_more_info_user_update->user_sex					= $check_user_info_table->sex;
			$this->check_more_info_user_update->user_phone 					= $check_user_info_table->phone;
			$this->check_more_info_user_update->user_email 					= $check_user_info_table->email;
			$this->check_more_info_user_update->user_address 				= $check_user_info_table->address;
			$this->check_more_info_user_update->user_birth_day 				= $check_user_info_table->birth_day;
			$this->check_more_info_user_update->user_description 			= $check_user_info_table->description;
			$this->check_more_info_user_update->user_profile_photo_path		= $check_user_info_table->profile_photo_path;
			$this->check_more_info_user_update->corporation_name			= $check_user_info_table->corporation_name;
			$this->check_more_info_user_update->company_name				= $check_user_info_table->company_name;
			$this->check_more_info_user_update->position_name				= $check_user_info_table->position_name;
			$this->check_more_info_user_update->department_name				= $check_user_info_table->department_name;
			$this->check_more_info_user_update->team_name					= $check_user_info_table->team_name;
			$checkBelongUserInculue											= $this->userRepository->getListUserByUser($this->check_more_info_user_update->user_id);
			$this->check_more_info_user_update->checkBelongUserInculue		= $checkBelongUserInculue;
		}
		/*-- End --*/
	}

	/* export mutil selected */
	#[On('exportToExcel')]
	public function exportToExcel()
    {
		$id =  array();
		foreach($this->selected as $key => $value) {
			if($value == true){
				$id[] = $key;
				$this->selected[$key] = false;
			}
		}
		$this->selected_status = false;
        $all =  new Collection();
		$array_column = array();
		$header = array();
		foreach($this->column_sorting_show_hide as $key => $value) {
			$array_column['todo.id as id'] = 'todo.id as ID';
			$header['ID'] = 'ID';
			if($key == 'date'){
				$array_column['todo.date as Date'] = 'todo.date as Date';
				$header['Date'] = 'Date';
			}elseif($key == 'user_id'){
				$array_column['users.name as Name'] = 'users.name as Name';
				$header['Name'] = 'Name';
			}elseif($key == 'team_id'){
				$array_column['teams.name as Team'] = 'teams.name as Team';
				$header['Team'] = 'Team';
			}elseif($key == 'department_id'){
				$array_column['departments.name as Department'] = 'departments.name as Department';
				$header['Department'] = 'Department';
			}elseif($key == 'position_id'){
				$array_column['positions.name as Position'] = 'positions.name as Position';
				$header['Position'] = 'Position';
			}elseif($key == 'company_id'){
				$array_column['companies.name as Company'] = 'companies.name as Company';
				$header['Company'] = 'Company';
			}elseif($key == 'corporation_id'){
				$array_column['corporations.name as Corporation'] = 'corporations.name as Corporation';
				$header['Corporation'] = 'Corporation';
			}elseif($key == 'todo'){
				$array_column['todo.todo as Todo'] = 'todo.todo as Todo';
				$header['Todo'] = 'Todo';
			}elseif($key == 'status'){
				$array_column['todo.status as Status'] = 'todo.status as Status';
				$header['Status'] = 'Status';
			}elseif($key == 'source_id'){
				$array_column['status.name as Source'] = 'status.name as Source';
				$header['Source'] = 'Source';
			}elseif($key == 'project_id'){
				$array_column['status.name as Project'] = 'status.name as Project';
				$header['Project'] = 'Project';
			}elseif($key == 'description'){
				$array_column['todo.description as Description'] = 'todo.description as Description';
				$header['Description'] = 'Description';
			}elseif($key == 'description_confirm'){
				$array_column['todo.description_confirm as Description Confirm'] = 'todo.description_confirm as Description Confirm';
				$header['Description Confirm'] = 'Description Confirm';
			}elseif($key == 'log'){
				$array_column['todo.log as Log'] = 'todo.log as Log';
				$header['Log'] = 'Log';
			}elseif($key == 'created_at'){
				$array_column['todo.created_at as Created At'] = 'todo.created_at as Created At';
				$header['Created At'] = 'Created At';
			}elseif($key == 'updated_at'){
				$array_column['todo.updated_at as Updated At'] = 'todo.updated_at as Updated At';
				$header['Updated At'] = 'Updated At';
			}elseif($key == 'confirm_at'){
				$array_column['todo.confirm_at as Confirm At'] = 'todo.confirm_at as Confirm At';
				$header['Confirm At'] = 'Confirm At';
			}elseif($key == 'user_created'){
				$array_column['todo.user_created user_created'] = 'todo.user_created as user_created';
				$header['User Created'] = 'User Created';
			}elseif($key == 'user_updated'){
				$array_column['todo.user_updated as user_updated'] = 'todo.user_updated as user_updated';
				$header['User Updated'] = 'User Updated';
			}elseif($key == 'user_confirm'){
				$array_column['todo.user_confirm as user_confirm'] = 'todo.user_confirm as user_confirm';
				$header['User Confirm'] = 'User Confirm';
			}
		}
        foreach (array_chunk($id,1000) as $id_chuck)
        {
            $all_chuck = Todo::select($array_column)
			->join('users', 'users.id', '=', 'todo.user_id')
			->join('teams', 'teams.id', '=', 'todo.team_id')
			->join('departments', 'departments.id', '=', 'todo.department_id')
			->join('positions', 'positions.id', '=', 'todo.position_id')
			->join('companies', 'companies.id', '=', 'todo.company_id')
			->join('corporations', 'corporations.id', '=', 'todo.corporation_id')
			->join('status', 'status.id', '=', 'todo.source_id')
			->whereIn('todo.id', $id_chuck)->get();
			
            $all = $all->concat($all_chuck);
			
        }
		$this->dispatch('ClosemodalloadingStates');
        return Excel::download(new UsersExport($all,$header), 'Todo_Export_by_Name_'.$this->getUserInfo->name.'_Code_'.$this->getUserInfo->code.'_Time_'.datetime().'.xlsx');
    }

	/* import  from excel */
	#[On('importFromExcel')]
	public function importFromExcel()
    {
		$this->dispatch('responsError', __('Feature under development.'));
    }

	/* delete single selected */
	#[On('deleteItem')]
	public function deleteItem($id) {
		$Corporation = Todo::where('todo.id', $id)->update(['todo.status' => '0','todo.user_updated' =>$this->getUserInfo->code,'todo.updated_at' => date('Y-m-d H:i:s')]);
		if ($Corporation) {
			$this->dispatch('msgSuccess', __('Successfully delete.'));
		} else {
			session()->flash('msgError', __('False delete.'));
		}
	}

	/* delete mutil selected */
	#[On('deleteMutil')]
	public function deleteMutil(){

		$count_success = 0;
		$count_error = 0;
		foreach($this->selected as $key => $value) {
			if($value == true){
				$update = Todo::where('id','=', $key)->update(array('status'=> '0','updated_at'=> now(),'user_updated'=> $this->getUserInfo->code));
				if($update){
					$count_success ++;
					$this->selected[$key] = false;
				}else{
					$count_error ++;
				}
			}
		}
		$this->selected_status = false;
		if($count_success == 0){

			$this->dispatch('responsError', __('False updated.'));
		}else{

			$this->dispatch('responseSuccess', __('Successfully updated with')." ".$count_success." ".__('success')." ".__('and')." ".$count_error." ".__('error'));
		}
	}
	/* active mutil selected */
	#[On('activatedMutil')]
	public function activatedMutil(){

		$count_success = 0;
		$count_error = 0;
		foreach($this->selected as $key => $value) {
			if($value == true){
				$update = Todo::where('id','=', $key)->update(array('status'=> '1','updated_at'=> now(),'user_updated'=> $this->getUserInfo->code));
				if($update){
					$count_success ++;
					$this->selected[$key] = false;
				}else{
					$count_error ++;
				}
			}
		}
		$this->selected_status = false;
		if($count_success == 0){

			$this->dispatch('responsError', __('False updated.'));
		}else{

			$this->dispatch('responseSuccess', __('Successfully updated with')." ".$count_success." ".__('success')." ".__('and')." ".$count_error." ".__('error'));
		}

	}
	/* delete mutil selected */
	#[On('deactivatedMutil')]
	public function deactivatedMutil(){

		$count_success = 0;
		$count_error = 0;
		foreach($this->selected as $key => $value) {
			if($value == true){
				$update = Todo::where('id','=', $key)->update(array('status'=> '0','updated_at'=> now(),'user_updated'=> $this->getUserInfo->code));
				if($update){
					$count_success ++;
					$this->selected[$key] = false;
				}else{
					$count_error ++;
				}
			}
		}
		$this->selected_status = false;
		if($count_success == 0){

			$this->dispatch('responsError', __('False updated.'));
		}else{

			$this->dispatch('responseSuccess', __('Successfully updated with')." ".$count_success." ".__('success')." ".__('and')." ".$count_error." ".__('error'));
		}

	}
		/* set value  paginationView */
	public function paginationView()
    {
		if($this->loadingSetting->table_todo_pagination_type  == 1){
        	return $this->loadingSetting->default_pagination;
		}else{
			return $this->loadingSetting->slide_one_pagination;
		}
    }

	/* render */
	public function render() {

		if($this->search != ""){

			$strtotime_search = strtotime($this->search);
			if($strtotime_search){
				$strtotime_search = date ( 'Y-m-d' ,$strtotime_search);
				$listTodo = Todo::wherenotnull($this->nameOfTable.'.user_id')->search($strtotime_search);
			}else{
				$listTodo = Todo::wherenotnull($this->nameOfTable.'.user_id')->search($this->search);
			}

		}else{
			$listTodo = Todo::wherenotnull($this->nameOfTable.'.user_id');
		}
		if(is_array($this->id_become_orther)){
			if(!empty($this->id_become_orther)){
				$listTodo->whereIn($this->nameOfTable.'.id',$this->id_become_orther);
			}
		}

		if(is_array($this->search_user_id)){
			if(!empty($this->search_user_id)){
	
				$listTodo->whereIn($this->nameOfTable.'.user_id',$this->search_user_id);
			}
		}


		$strtotime_from = strtotime($this->search_todo_from);
		$strtotime_to = strtotime($this->search_todo_to);
		if($strtotime_from){
				$listTodo->where($this->nameOfTable.'.time','>=',date ( 'Y-m-d H:i:00' ,$strtotime_from));
		}
		if($strtotime_to){
				$listTodo->where($this->nameOfTable.'.time','<=',date ( 'Y-m-d H:i:59' ,$strtotime_to));
		}

		if(is_array($this->search_status)){
			if(!empty($this->search_status)){
	
				$listTodo->whereIn($this->nameOfTable.'.status',$this->search_status);
			}
		}

		$count_order = 0;
		if($this->order_by_priority !=""){
			$listTodo->orderByRaw("FIELD(user_id, $this->order_by_priority ) DESC ");
			$count_order ++;
		}
		if(is_array($this->loadingSetting->table_todo_key_order)){
			foreach($this->loadingSetting->table_todo_key_order as $key=>$value){
				if($value == "desc" || $value == "asc"){
					$listTodo->orderBy($this->nameOfTable.".".$key,$value);
					$count_order ++;
				}
			}
		}
		if($count_order  == 0){

			$listTodo->orderBy($this->nameOfTable.".id","desc");

		}
		if($this->loadingSetting->table_todo_pagination_type ==1 ){
			return view('todo::livewire.pages.index-page',[
				'listTodo' => $listTodo->paginate($this->loadingSetting->table_todo_perPage),
				'loadingSetting' => $this->loadingSetting,
				'getUserInfo' => $this->getUserInfo,
				'getlistUser' => $this->getlistUser,
				'listUserPriority' => $this->listUserPriority,
			]);
		}
		else{
			return view('todo::livewire.pages.index-page',[
				'listTodo' => $listTodo->paginate(1),
				'loadingSetting' => $this->loadingSetting,
				'getUserInfo' => $this->getUserInfo,
				'getlistUser' => $this->getlistUser,
				'listUserPriority' => $this->listUserPriority,
			]);
		}
	}
}
