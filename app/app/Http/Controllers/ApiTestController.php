<?php

namespace App\Http\Controllers;

use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;

use App\Site;

use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    public function test(Request $request)
    {
        $site = Site::where('site_name',$request->title)->first();
        //dd($site);
        $summary = $site->site_name;
        $date = $site->started_at;

        $client = $this->getClient();
        $service = new Google_Service_Calendar($client);

        $calendarId = env('GOOGLE_CALENDAR_ID');

        $event = new Google_Service_Calendar_Event(array(
            //タイトル
            'summary' => $summary,
            'start' => array(
                // 開始日時
                'dateTime' =>$date.'T11:00:00+09:00',
                'timeZone' => 'Asia/Tokyo',
            ),
            'end' => array(
                // 終了日時
                'dateTime' =>$date.'T11:00:00+09:00',
                'timeZone' => 'Asia/Tokyo',
            ),
        ));

        $event = $service->events->insert($calendarId, $event);
       return redirect('/');
    }

    private function getClient()
    {
        $client = new Google_Client();

        //アプリケーション名
        $client->setApplicationName('GoogleCalendarAPIのテスト');
        //権限の指定
        $client->setScopes(Google_Service_Calendar::CALENDAR_EVENTS);
        //JSONファイルの指定
        $client->setAuthConfig(storage_path('app/api-key/my-project-71426-380907-d9f8eb631d30.json'));

        return $client;
    }
}
