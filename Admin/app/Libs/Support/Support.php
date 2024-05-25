<?php

namespace Modules\Admin\app\Libs\Support;
class Support
{
	function docchuoiso() {

	}
	public function unsigned($str)
	{
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|� �|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|� �|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);

		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|� �|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|� �|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);

		return $str;
	}
	public function Chu($gNumber)
	{
				$result = "";
				switch ($gNumber)
				{
					case "0":
						$result = "Không ";
						break;
					case "1":
						$result = "Một ";
						break;
					case "2":
						$result = "Hai ";
						break;
					case "3":
						$result = "Ba ";
						break;
					case "4":
						$result = "Bốn ";
						break;
					case "5":
						$result = "Năm ";
						break;
					case "6":
						$result = "Sáu ";
						break;
					case "7":
						$result = "Bảy ";
						break;
					case "8":
						$result = "Tám ";
						break;
					case "9":
						$result = "Chín ";
						break;
				}
				return $result;
	}
	public function Donvi($so)
	{
				$Kdonvi = "";

				if ($so == 1)
					$Kdonvi = "";
				if ($so == 2)
					$Kdonvi = "Nghìn ";
				if ($so == 3)
					$Kdonvi = "Triệu ";
				if ($so == 4)
					$Kdonvi = "Tỷ ";
				if ($so == 5)
					$Kdonvi = "Nghìn Tỷ ";
				if ($so == 6)
					$Kdonvi = "Triệu Tỷ ";
				if ($so == 7)
					$Kdonvi = "Tỷ Tỷ ";

				return $Kdonvi;
	}

	public function Doc_3_So($Tach3)
	{
		$KetQua = "";
		if($Tach3 == "000")
			return "";

		if(strlen($Tach3) !=0)
		{
			$tram = floor($Tach3/100);
			$chuc = floor(($Tach3%100)/10);
			$donvi = floor($Tach3%10);

			if(strlen($Tach3) <= 2)
			{
				if (($chuc != 0) && ($chuc != 1))
				$KetQua .= $this->Chu($chuc) . "Mươi ";

				if ($chuc == 1)
					$KetQua .= "Mười ";
			}
			if(strlen($Tach3) == 3)
			{
				$KetQua .= $this->Chu($tram) . "Trăm ";

				if (($chuc == 0) && ($donvi != 0))
					$KetQua .= "Linh ";

				if (($chuc != 0) && ($chuc != 1))
				{
					$KetQua .= $this->Chu($chuc) . "Mươi ";
					if (($chuc == 0) && ($donvi != 0))
						$KetQua = $KetQua . "li ";
				}
				if ($chuc == 1)
					$KetQua .= "Mười ";
			}

			switch ($donvi)
			{
				case 1:
					if (($chuc != 0) && ($chuc != 1))
					{
						$KetQua .= "Mốt ";
					}
					else
					{
						$KetQua .= $this->Chu($donvi);
					}
					break;
				case 5:
					if ($chuc == 0)
					{
						$KetQua .= $this->Chu($donvi);
					}
					else
					{
						$KetQua .= "Lăm ";
					}
					break;
				default:
					if ($donvi != 0)
					{
						$KetQua .= $this->Chu($donvi);
					}
					break;
			}

		}
		return $KetQua;
	}
	public function DocSo($gNum)
	{

		if ($gNum == 0)
			return "0 d";
		$KetQua = "";
		$tach_mod = "";
		$num = round($gNum);

		//số chuỗi số có 3 chữ số được tách

		$m = intval(strlen($num) / 3);

		//lay độ dài chuỗi số đầu tiên(tinh từ trái sang phải) sau khi tách

		$mod = strlen($num) - $m*3;

		// Tach hang lon nhat

		if($mod == 1)
			$tach_mod = substr($num,0,1);
		if($mod == 2)
			$tach_mod = substr($num,0,2);
		if($mod == 0)
			$tach_mod = "000";

		//đọc don vi hang lớn nhất

		$donvi = $m + 1;
		if($mod > 0)
			$KetQua = $this->Doc_3_So($tach_mod). $this->Donvi($donvi);

		$i = $m;
		$j = 1;
		$tach3 = "";
		$tach_conlai = "";

		//lấy giá trị còn lại sau khi tach hàng đầu tiên

		if(strlen($num) > 2)
			$tach_conlai = substr($num,$mod,(strlen($num) - $mod));

		while($i > 0)
		{
			// Tach 3 trong tach_conlai
			$tach3 = substr($tach_conlai,0,3);
			$donvi = $m + 1 - $j;

			if($tach3 != "000")
				$KetQua = $KetQua . $this->Doc_3_So($tach3). $this->Donvi($donvi);

			$tach_conlai = substr($tach_conlai,3,strlen($tach_conlai) - 3);

			$i = $i - 1;
			$j = $j + 1;
		}
		if(strlen($KetQua) > 0)
			$str = $KetQua.'Đồng';
		$arr_so = explode('[ ]',trim($str));
		$chuoi_doc_so="";
		foreach($arr_so as $number){
			$chuoi_doc_so=$chuoi_doc_so.$number.' ';
		}
		return $chuoi_doc_so;
	}

}
