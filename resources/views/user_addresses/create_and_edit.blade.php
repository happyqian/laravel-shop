@extends('layouts.app')
@section('title', ($address->id ? '修改' : '新增') . '收货地址')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-lg-1">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">{{ $address->id ? '修改' : '新增' }}收货地址</h2>
                </div>
                <div class="card-body">
                    <!-- 输出后端报错开始 -->
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <h4>有错误发生: </h4>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li><i class="glyphicon glyphicon-remove"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- 后端报错结束 -->
                    <!-- inline-template 代表通过内联方式引入组件 -->
                    <user-addresses-create-and-edit inline-template>
                        @if($address->id)
                        <form action="{{ route('user_addresses.update', ['user_address' => $address->id]) }}" method="post" class="form-horizontal" role="form">
                            {{ method_field('PUT') }}
                        @else
                        <form action="{{ route('user_addresses.store') }}" method="post" class="form-horizontal" role="form">
                        @endif
                        <!-- 引入 csrf token 字段 -->
                        {{ csrf_field() }}
                        <!-- inline-template 代表通过内联方式引入组件 -->
                        <select-district :init-value="{{ json_encode([old('province', $address->province), old('city', $address->city), old('district', $address->district)]) }}" @change="onDistrictChanged" inline-template>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-sm-2 text-md-right">省市区</label>
                                <div class="col-sm-3">
                                    <select v-model="provinceId" class="form-control">
                                        <option value="">选择省份</option>
                                        <option v-for="(name,id) in provinces" :value="id">@{{ name }}</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select v-model="cityId" class="form-control">
                                        <option value="">选择城市</option>
                                        <option v-for="(name, id) in cities" :value="id">@{{ name }}</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select v-model="districtId" class="form-control">
                                        <option value="">选择地区</option>
                                        <option v-for="(name, id) in districts" :value="id">@{{ name }}</option>
                                    </select>
                                </div>
                            </div>
                        </select-district>
                        <!-- 插入了 3 个隐藏的字段 -->
                        <!-- 通过 v-model 与 user-addresses-create-and-edit 组件里的值关联起来 -->
                        <input type="hidden" name="province" v-model="province">
                        <input type="hidden" name="city" v-model="city">
                        <input type="hidden" name="district" v-model="district" >
                        <div class="form-group row">
                            <label for="" class="col-form-label text-md-right col-sm-2">详情地址</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" value="{{ old('address', $address->address) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label text-md-right col-sm-2">邮编</label>
                            <div class="col-sm-9">
                                <input type="text" name="zip" value="{{ old('zip', $address->zip) }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label text-md-right col-sm-2">姓名</label>
                            <div class="col-sm-9">
                                <input type="text" name="contact_name" value="{{ old('contact_name', $address->contact_name) }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label text-md-right col-sm-2">电话</label>
                            <div class="col-sm-9">
                                <input type="text" name="contact_phone" value="{{ old('contact_phone', $address->contact_phone) }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </div>
                    </form>
                    </user-addresses-create-and-edit>
                </div>
            </div>
        </div>
    </div>
@endsection