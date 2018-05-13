<?php

use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
        ['id'=>'1','option_key'=>'currency_sign','option_value'=>'USD'],
        ['id'=>'2','option_key'=>'enable_stripe','option_value'=>'1'],
        ['id'=>'3','option_key'=>'stripe_test_mode','option_value'=>'1'],
        ['id'=>'4','option_key'=>'paypal_receiver_email','option_value'=>'aditya.gunawan19th@gmail.com'],
        ['id'=>'5','option_key'=>'stripe_test_secret_key','option_value'=>'sk_test_tJeAdA1KbhiYV8I8bfPmJcOL'],
        ['id'=>'6','option_key'=>'stripe_test_publishable_key','option_value'=>'pk_test_P3TFmKrvT7l29Zpyy1f4pwk8'],
        ['id'=>'7','option_key'=>'stripe_live_secret_key','option_value'=>NULL],
        ['id'=>'8','option_key'=>'stripe_live_publishable_key','option_value'=>NULL],
        ['id'=>'9','option_key'=>'date_format','option_value'=>'d/m/Y'],
        ['id'=>'10','option_key'=>'time_format','option_value'=>'H:i'],
        ['id'=>'11','option_key'=>'site_name','option_value'=>'CrowdfundingITS'],
        ['id'=>'12','option_key'=>'site_title','option_value'=>'CrowdfundingITS'],
        ['id'=>'13','option_key'=>'email_address','option_value'=>'aditya.gunawan19th@gmail.com'],
        ['id'=>'14','option_key'=>'default_timezone','option_value'=>'Africa/Abidjan'],
        ['id'=>'15','option_key'=>'date_format_custom','option_value'=>'d/m/Y'],
        ['id'=>'16','option_key'=>'time_format_custom','option_value'=>'H:i'],
        ['id'=>'17','option_key'=>'enable_paypal','option_value'=>'1'],
        ['id'=>'18','option_key'=>'enable_paypal_sandbox','option_value'=>'1'],
        ['id'=>'19','option_key'=>'additional_css','option_value'=>NULL],
        ['id'=>'20','option_key'=>'additional_js','option_value'=>NULL],
        ['id'=>'21','option_key'=>'footer_about_us','option_value'=>'Insitut Teknologi Sepuluh Nopember'],
        ['id'=>'22','option_key'=>'footer_about_us_read_more_text','option_value'=>NULL],
        ['id'=>'23','option_key'=>'footer_address','option_value'=>'<li><i class="fa fa-map-marker"></i> <span>Sukolilo , Surabaya<br/> Aditya Gunawan , ITS<br />Indonesia</span></li>Telphone<li><i class="fa fa-phone"></i> <span>087853497974</span></li>Email<li><i class="fa fa-envelope-o"></i> <span>aditya@its.ac.id</span></li>'],
        ['id'=>'24','option_key'=>'copyright_text','option_value'=>'[copyright_sign] [year] [site_name], All rights reserved.'],
        ['id'=>'25','option_key'=>'logo','option_value'=>'1519802346hyimz-logo-its-png-4.png'],
        ['id'=>'26','option_key'=>'logo_settings','option_value'=>'show_image'],
        ['id'=>'27','option_key'=>'enable_social_login','option_value'=>'1'],
        ['id'=>'28','option_key'=>'enable_facebook_login','option_value'=>'1'],
        ['id'=>'29','option_key'=>'enable_google_login','option_value'=>'1'],
        ['id'=>'30','option_key'=>'fb_app_id','option_value'=>'807346162754117'],
        ['id'=>'31','option_key'=>'fb_app_secret','option_value'=>'6b93030d5c4f2715aa9d02be93256fbd'],
        ['id'=>'32','option_key'=>'google_client_id','option_value'=>'497260510312-8ljt5tpaevl93b83dogd2bvgdfsagsh8.apps.googleusercontent.com'],
        ['id'=>'33','option_key'=>'google_client_secret','option_value'=>'hbo9vPmoiSMhVGYetTZm0Zzz'],
        ['id'=>'34','option_key'=>'campaign_owner_commission','option_value'=>'90'],
        ['id'=>'35','option_key'=>'enable_disqus_comment','option_value'=>'1'],
        ['id'=>'36','option_key'=>'disqus_shortname','option_value'=>'tclassifieds'],

        ]);
    }
}
