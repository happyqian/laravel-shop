<?php

namespace App\Http\Requests;

class UserAddressRequest extends Request
{

    public function rules()
    {
        return [
            'province'      => 'required',
            'city'          => 'required',
            'district'      => 'required',
            'address'       => 'required',
            'zip'           => 'required',
            'contact_name'  => 'required',
            'contact_phone' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'province'      => '省',
            'city'          => '城市',
            'district'      => '地区',
            'zip'           => '邮编',
            'address'       => '详细地址',
            'contact_name'  => '姓名',
            'contact_phone' => '手机',
        ];
    }
}
