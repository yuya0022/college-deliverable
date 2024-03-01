<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //以下のデータについては、既にテーブルに挿入済み.
        // 今後、イベントinfoデータを追加していく場合は、$paramsの値を適切に変更する.
        
        // $params = [
        //     [
        //         ['2016-03-17', '東京国際フォーラム']
        //     ],
        //     [
        //         ['2016-04-17', '幕張メッセ'], ['2016-04-30', '京都パルスプラザ'], ['2016-05-14', 'ポートメッセなごや']
        //     ],
        //     [
        //         ['2016-05-01', '京都パルスプラザ'], ['2016-05-15', 'ポートメッセなごや'], ['2016-05-28', '幕張メッセ'], 
        //         ['2016-06-04', 'パシフィコ横浜'], ['2016-06-26', 'パシフィコ横浜']
        //     ],
        //     [
        //         ['2016-08-13', 'ポートメッセなごや'], ['2016-09-03', '幕張メッセ'], ['2016-10-16', '京都パルスプラザ']
        //     ],
        //     [
        //         ['2016-08-14', 'ポートメッセなごや'], ['2016-08-28', 'パシフィコ横浜'], ['2016-09-11', '幕張メッセ'],
        //         ['2016-09-22', 'みやこめっせ'], ['2016-10-09', '幕張メッセ']
        //     ],
        //     [
        //         ['2016-12-17', 'ポートメッセなごや'], ['2017-01-15', 'パシフィコ横浜'], ['2017-01-22', '幕張メッセ'],
        //         ['2017-02-18', '幕張メッセ'], ['2017-02-26', '京都パルスプラザ'], ['2017-03-04', '幕張メッセ']
        //     ],
        //     [
        //         ['2016-12-18', 'ポートメッセなごや'], ['2017-01-21', '幕張メッセ'], ['2017-02-25', '京都パルスプラザ']
        //     ],
        //     [
        //         ['2016-12-24', '有明コロシアム'], ['2016-12-25', '有明コロシアム']
        //     ],
        //     [
        //         ['2017-04-06', '国立代々木競技場 第一体育館']
        //     ],
        //     [
        //         ['2017-04-08', '幕張メッセ'], ['2017-04-30', '京都パルスプラザ'], ['2017-05-14', 'ポートメッセなごや'],
        //         ['2017-05-27', '幕張メッセ'], ['2017-06-25', '幕張メッセ'], ['2017-07-09', 'パシフィコ横浜']
        //     ],
            
        //     [
        //         ['2017-04-29', '京都パルスプラザ'], ['2017-05-13', 'ポートメッセなごや'], ['2017-06-24', '幕張メッセ']
        //     ],
        //     [
        //         ['2017-07-22', '富士急ハイランドコニファーフォレスト'], ['2017-07-23', '富士急ハイランドコニファーフォレスト']
        //     ],
        //     [
        //         ['2017-07-29', '京都パルスプラザ'], ['2017-08-13', '名古屋吹上ホール'], ['2017-09-10', '幕張メッセ']
        //     ],
        //     [
        //         ['2017-08-02', '神戸ワールド記念ホール'], ['2017-08-03', '神戸ワールド記念ホール'], ['2017-08-09', '福岡国際センター'],
        //         ['2017-08-10', '福岡国際センター'], ['2017-08-16', '日本ガイシホール'], ['2017-08-17', '日本ガイシホール'],
        //         ['2017-08-22', 'ゼビオアリーナ仙台'], ['2017-08-23', 'ゼビオアリーナ仙台'], ['2017-08-25', '朱鷺メッセ 新潟コンベンションセンター'],
        //         ['2017-08-29', '幕張メッセ'], ['2017-08-30', '幕張メッセ']
        //     ],
        //     [
        //         ['2017-11-05', '京都パルスプラザ'], ['2017-11-19', 'パシフィコ横浜'], ['2018-01-08', '幕張メッセ'],
        //         ['2018-01-14', 'ポートメッセなごや'], ['2018-02-03', '幕張メッセ'], ['2018-02-11', 'パシフィコ横浜']
        //     ],
        //     [
        //         ['2018-01-13', 'ポートメッセなごや'], ['2018-01-20', 'インテックス大阪'], ['2018-01-21', '幕張メッセ']
        //     ],
        //     [
        //         ['2018-03-17', '東京ビッグサイト'], ['2018-03-21', '東京ビッグサイト'], ['2018-04-22', '幕張メッセ'],
        //         ['2018-06-02', 'ポートメッセなごや'], ['2018-06-10', 'パシフィコ横浜'], ['2018-06-24', '京都パルスプラザ']
        //     ],
        //     [
        //         ['2018-03-24', 'ポートメッセなごや'], ['2018-04-21', '幕張メッセ'], ['2018-05-04', 'インテックス大阪']
        //     ],
        //     [
        //         ['2018-04-06', '武蔵野の森総合スポーツプラザ'], ['2018-04-07', '武蔵野の森総合スポーツプラザ'], ['2018-04-08', '武蔵野の森総合スポーツプラザ']
        //     ],
        //     [
        //         ['2018-07-20', '富士急ハイランドコニファーフォレスト'], ['2018-07-21', '富士急ハイランドコニファーフォレスト'],
        //         ['2018-07-22', '富士急ハイランドコニファーフォレスト']
        //     ],
            
        //     [
        //         ['2018-08-11', 'マリンメッセ福岡'], ['2018-08-12', 'マリンメッセ福岡'], ['2018-08-18', '朱鷺メッセ 新潟コンベンションセンター'],
        //         ['2018-08-19', '朱鷺メッセ 新潟コンベンションセンター'], ['2018-08-23', '横浜アリーナ'], ['2018-08-24', '横浜アリーナ'],
        //         ['2018-08-30', '神戸ワールド記念ホール'], ['2018-08-31', '神戸ワールド記念ホール'], ['2018-09-01', '神戸ワールド記念ホール'],
        //         ['2018-09-04', '幕張メッセ'], ['2018-09-05', '幕張メッセ']
        //     ],
        //     [
        //         ['2018-09-02', '渋谷ストリーム']
        //     ],
        //     [
        //         ['2018-09-15', '幕張メッセ'], ['2018-09-24', 'ポートメッセなごや'], ['2018-09-29', 'パシフィコ横浜'],
        //         ['2018-10-13', '東京ビッグサイト'], ['2018-11-04', '京都パルスプラザ'], ['2018-11-17', '幕張メッセ']
        //     ],
        //     [
        //         ['2018-09-23', 'ポートメッセなごや'], ['2018-10-07', '幕張メッセ'], ['2018-12-22', 'インテックス大阪']
        //     ],
        //     [
        //         ['2019-03-09', '幕張メッセ'], ['2019-03-16', 'ポートメッセなごや'], ['2019-03-21', 'インテックス大阪']
        //     ],
        //     [
        //         ['2019-03-24', 'ポートメッセなごや'], ['2019-04-29', '幕張メッセ'], ['2019-05-04', 'パシフィコ横浜'],
        //         ['2019-06-02', 'パシフィコ横浜'], ['2019-06-23', '京都パルスプラザ'], ['2019-07-14', 'パシフィコ横浜']
        //     ],
        //     [
        //         ['2019-04-04', '大阪フェスティバルホール'], ['2019-04-05', '大阪フェスティバルホール'], ['2019-04-06', '大阪フェスティバルホール'], 
        //         ['2019-05-09', '日本武道館'], ['2019-05-10', '日本武道館'], ['2019-05-11', '日本武道館']
        //     ],
        //     [
        //         ['2019-04-20', '丸善インテックアリーナ大阪'], ['2019-04-21', '丸善インテックアリーナ大阪'], ['2019-04-27', '武蔵野の森総合スポーツプラザ'],
        //         ['2019-04-28', '武蔵野の森総合スポーツプラザ']
        //     ],
        //     [
        //         ['2019-07-05', '富士急ハイランドコニファーフォレスト'], ['2019-07-06', '富士急ハイランドコニファーフォレスト'],
        //         ['2019-07-07', '富士急ハイランドコニファーフォレスト']
        //     ],
        //     [
        //         ['2019-08-16', 'ゼビオアリーナ仙台'], ['2019-08-17', 'ゼビオアリーナ仙台'], ['2019-08-18', 'ゼビオアリーナ仙台'],
        //         ['2019-08-22', '横浜アリーナ'], ['2019-08-23', '横浜アリーナ'], ['2019-08-27', '大阪城ホール'],
        //         ['2019-08-28', '大阪城ホール'], ['2019-09-04', '福岡国際センター'], ['2019-09-05', '福岡国際センター'],
        //         ['2019-09-06', '福岡国際センター'], ['2019-09-18', '東京ドーム'], ['2019-09-19', '東京ドーム']
        //     ],
            
        //     [
        //         ['2020-07-16', 'オンライン']
        //     ],
        //     [
        //         ['2020-09-27', 'オンライン']
        //     ],
        //     [
        //         ['2020-10-12', '国立代々木競技場 第一体育館'], ['2020-10-13', '国立代々木競技場 第一体育館']
        //     ],
        //     [
        //         ['2020-12-08', '全国各地の映画館']
        //     ],
        //     [
        //         ['2021-06-16', '舞浜アンフィシアター'], ['2021-06-17', '舞浜アンフィシアター'], ['2021-06-18', '舞浜アンフィシアター']
        //     ],
        //     [
        //         ['2021-07-09', '富士急ハイランドコニファーフォレスト'], ['2021-07-11', '富士急ハイランドコニファーフォレスト']
        //     ],
        //     [
        //         ['2021-09-11', '西日本総合展示場 新館'], ['2021-09-12', '西日本総合展示場 新館'],
        //         ['2021-09-19', 'Aichi Sky Expo ホールA'], ['2021-09-20', 'Aichi Sky Expo ホールA'],
        //         ['2021-10-09', '丸善インテックアリーナ'], ['2021-10-10', '丸善インテックアリーナ'],
        //         ['2021-10-29', 'さいたまスーパーアリーナ'], ['2021-10-30', 'さいたまスーパーアリーナ'], ['2021-10-31', 'さいたまスーパーアリーナ']
        //     ],
        //     [
        //         ['2021-12-09', '日本武道館'], ['2021-12-10', '日本武道館']
        //     ],
        //     [
        //         ['2022-01-08', '東京ガーデンシアター'], ['2022-01-09', '東京ガーデンシアター']
        //     ],
        //     [
        //         ['2022-05-21', '国立代々木競技場 第一体育館'], ['2022-05-22', '国立代々木競技場 第一体育館']
        //     ],
            
        //     [
        //         ['2022-08-19', '富士急ハイランドコニファーフォレスト'], ['2022-08-20', '富士急ハイランドコニファーフォレスト']
        //     ],
        //     [
        //         ['2022-09-29', '丸善インテックアリーナ'], ['2022-09-30', '丸善インテックアリーナ'],
        //         ['2022-10-05', '広島サンプラザホール'], ['2022-10-06', '広島サンプラザホール'], 
        //         ['2022-10-15', 'セキスイハイムスーパーアリーナ'], ['2022-10-16', 'セキスイハイムスーパーアリーナ'], 
        //         ['2022-10-21', '日本ガイシホール'], ['2022-10-22', '日本ガイシホール'],
        //         ['2022-10-25', '西日本総合展示場 新館'], ['2022-10-26', '西日本総合展示場 新館'],
        //         ['2022-11-08', '東京ドーム'], ['2022-11-09', '東京ドーム']
        //     ],
        //     [
        //         ['2022-12-08', '日本武道館'], ['2022-12-09', '日本武道館']
        //     ],
        //     [
        //         ['2023-02-27', 'KT Zepp Yokohama']
        //     ],
        //     [
        //         ['2023-03-04', 'ぴあアリーナMM'], ['2023-03-05', 'ぴあアリーナMM']
        //     ],
        //     [
        //         ['2023-04-12', '国立代々木競技場 第一体育館'], ['2023-04-13', '国立代々木競技場 第一体育館'],
        //         ['2023-04-19', '日本ガイシホール'], ['2023-04-20', '日本ガイシホール'],
        //         ['2023-04-29', '福岡国際センター'], ['2023-04-30', '福岡国際センター'],
        //         ['2023-05-23', 'ぴあアリーナMM'], ['2023-05-24', 'ぴあアリーナMM'], ['2023-05-25', 'ぴあアリーナMM'],
        //         ['2023-05-31', '大阪城ホール'], ['2023-06-01', '大阪城ホール']
        //     ],
        //     [
        //         ['2023-08-13', '幕張メッセ']
        //     ],
        //     [
        //         ['2023-11-06', 'THEATER MILANO-Za'], ['2023-11-08', 'THEATER MILANO-Za'], ['2023-11-09', 'THEATER MILANO-Za'],
        //         ['2023-11-11', 'THEATER MILANO-Za'], ['2023-11-12', 'THEATER MILANO-Za'], ['2023-12-01', 'THEATER MILANO-Za'],
        //         ['2023-12-02', 'THEATER MILANO-Za']
        //     ],
        //     [
        //         ['2023-11-25', 'ZOZOマリンスタジアム'], ['2023-11-26', 'ZOZOマリンスタジアム']
        //     ],
        //     [
        //         ['2024-01-13', '京都パルスプラザ'], ['2024-01-21', '幕張メッセ']
        //     ],
            
        //     [
        //         ['2024-01-15', '豊洲PIT'], ['2024-01-16', '豊洲PIT'],
        //         ['2024-01-22', 'Zepp DiverCitty(TOKYO)'], ['2024-01-23', 'Zepp DiverCitty(TOKYO)']
        //     ],
        //     [
        //         ['2024-01-31', '国立代々木競技場 第一体育館'], ['2024-02-01', '国立代々木競技場 第一体育館']
        //     ],
        //     [
        //         ['2024-03-02', 'マリンメッセ福岡A館'], ['2024-03-03', 'マリンメッセ福岡A館'],
        //         ['2024-03-12', '大阪城ホール'], ['2024-03-13', '大阪城ホール'],
        //         ['2024-03-19', '日本ガイシホール'], ['2024-03-20', '日本ガイシホール'],
        //         ['2024-03-26', 'ぴあアリーナMM'], ['2024-03-27', 'ぴあアリーナMM']
        //     ],
        // ];
        
        // for($i = 0; $i < count($params); $i++){
        //     foreach($params[$i] as $param){
        //         DB::table('event_info')->insert([
        //           'event_id' => $i + 1,
        //           'date' => $param[0],
        //           'venue' => $param[1],
        //         ]);
        //     }
        // }
        
    }
}