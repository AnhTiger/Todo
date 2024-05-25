<?php

namespace Modules\Admin\app\Models;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithMapping;
class UsersExport implements FromCollection,WithHeadings, ShouldAutoSize, WithStrictNullComparison,WithProperties,WithStyles, WithTitle , WithMapping
{
    public $all,$header;

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],

        ];
    }
	
    public function properties(): array
    {
        return [
            'creator'        => 'Phạm Tuấn Anh',
            'title'          => 'Phạm Tuấn Anh',
            'description'    => 'Phạm Tuấn Anh',
            'subject'        => 'Phạm Tuấn Anh',
            'keywords'       => 'Phạm Tuấn Anh',
            'category'       => 'ExcelExport',
            'manager'        => 'Phạm Tuấn Anh',
            'company'        => 'Phạm Tuấn Anh',
        ];
    }
    public function map($row): array
    {   
        $ok = array();
        if(is_array($row)){
            $ok = $row;
        }else{
            $ok = $row->toArray();
        }
        if(isset($row->parent)){
            if($row->parent->name != null){
                $name = $row->parent->name;       
                $ok['parent_id'] = $name;
                unset($ok['parent']);
            }
        }

        if(isset($row->userUpdate)){             
            $user_updated           = $row->userUpdate->name;
            $user_updated_code      = $row->userUpdate->code;
            if($user_updated == null){
                $user_updated = "";
            }
            $ok['user_updated'] = $user_updated."-".$user_updated_code;
            unset($ok['userUpdate']);
        }
        if(isset($row->userCreate)){
            $user_created = $row->userCreate->name;
            $user_created_code      = $row->userUpdate->code;
            if($user_created == null){
                $user_created = "";
            }
            $ok['user_created'] = $user_created."-".$user_created_code;
            unset($ok['userCreate']);
        }

        if(isset($row->userConfirm)){
            $user_confirm = $row->userConfirm->name;
            $user_confirm_code      = $row->userUpdate->code;
            if($user_confirm == null){
                $user_confirm = "";
            }
            $ok['user_confirm'] = $user_confirm."-".$user_confirm_code;
            unset($ok['userConfirm']);
        }
        
        return $ok;
    }
	
    public function __construct($all,$header) {
        $this->all = $all;
        $this->header = $header;
    }

    public function collection()
    {
        return $this->all ;
    }

    public function headings(): array
    {
        return $this->header;
    }

    public function title(): string
    {
        return 'Phạm Tuấn Anh';
    }
	
}