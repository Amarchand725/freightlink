<?php 
use App\Models\PageSetting;
use App\Models\Partner;
use App\Models\CompanyNetwork;

function globalData()
{
    $page_settings = PageSetting::get(['parent_slug', 'key', 'value']);
    $home_page_data = [];
    foreach ($page_settings as $key => $page_setting) {
        $home_page_data[$page_setting->key] = $page_setting->value;
    }
    return $home_page_data;
}

function getPartners(){
    return Partner::where('status', 1)->get();
}

function networkStatus($company_id, $network_id)
{
    return CompanyNetwork::where('company_id', $company_id)->where('network_id', $network_id)->first();
}