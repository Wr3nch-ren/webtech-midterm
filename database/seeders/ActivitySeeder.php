<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\OrganizerList;
use App\Models\RegisteredList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { //

        $activity = new Activity();         //id = 1
        $activity->activity_name = 'ค่ายอาสาเขาใหญ่';
        $activity->deadline = '30-02-2024';
        $activity->activity_type = 'อาสา';
        $activity->activity_category = 'ค้างคืน';
        $activity->user_id = 1; //คนสร้าง
        $activity->organizer_name = "วิทยาการคอมพิวเตอร์ เกษตรศาสตร์";
        $activity->activity_hours = 3;
        $activity->activity_start = '2024-03-3';
        $activity->activity_end = '2024-03-5';
        $activity->participant_number = 30;
        $activity->activity_fee = 100;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'เขาใหญ่';
        $activity->description = 'ทำประโยชน์กันเถอะ';
        $activity->contact = '0812345678';
        $activity->poster_path = 'https://images.unsplash.com/photo-1496947850313-7743325fa58c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y2FtcCUyMGFjdGl2aXR5fGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60';
        $activity->budget = 1000;
        $activity->working_team_number = 3;
        $activity->verify = false;
        $activity->save();


        $activity = new Activity();         //id = 2
        $activity->activity_name = 'ค่ายอาสากทม กวาดลานวัด';
        $activity->deadline = '20-02-2024';
        $activity->activity_type = 'อาสา';
        $activity->activity_category = 'ค้างคืน';
        $activity->user_id = 1; //คนสร้าง
        $activity->organizer_name = "คณะเกษตร เกษตรศาสตร์";
        $activity->activity_hours = 3;
        $activity->activity_start = '2024-03-1';
        $activity->activity_end = '2024-03-5';
        $activity->participant_number = 50;
        $activity->activity_fee = 500;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'วัดป่า กทม';
        $activity->description = 'ทำประโยชน์กันเถอะ มีชั่วโมงกิจกรรม';
        $activity->contact = 'ภาควิชาคอมพิวเตอร์';
        $activity->poster_path = 'https://images.unsplash.com/photo-1470246973918-29a93221c455?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FtcCUyMGFjdGl2aXR5fGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60';
        $activity->budget = 1000;
        $activity->working_team_number = 5;
        $activity->verify = true;
        $activity->save();


        $activity = new Activity();         //id = 3
        $activity->activity_name = 'ค่ายอาสากทม กวาดลานวัด ครั้งที่3';
        $activity->deadline = '20-02-2024';
        $activity->activity_type = 'อาสา';
        $activity->activity_category = 'ค้างคืน';
        $activity->user_id = 1; //คนสร้าง
        $activity->organizer_name = "คณะเกษตร เกษตรศาสตร์";
        $activity->activity_hours = 3;
        $activity->activity_start = '2024-03-1';
        $activity->activity_end = '2024-03-5';
        $activity->participant_number = 50;
        $activity->activity_fee = 500;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'วัดป่า กทม';
        $activity->description = 'ทำประโยชน์กันเถอะ มีชั่วโมงกิจกรรม';
        $activity->contact = 'ภาควิชาคอมพิวเตอร์';
        $activity->poster_path = 'https://images.unsplash.com/photo-1538460120076-604b93a2ce88?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dGVtcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60';
        $activity->budget = 10000;
        $activity->working_team_number = 5;
        $activity->verify = true;
        $activity->save();

        $activity = new Activity();         //id = 4
        $activity->activity_name = 'ถวายดวงใจ ครั้งที่4';
        $activity->deadline = '20-02-2024';
        $activity->activity_type = 'อาสา';
        $activity->activity_category = 'ค้างคืน';
        $activity->user_id = 3; //คนสร้าง
        $activity->organizer_name = "คณะเกษตร เกษตรศาสตร์";
        $activity->activity_hours = 5;
        $activity->activity_start = '2024-03-1';
        $activity->activity_end = '2024-03-5';
        $activity->participant_number = 50;
        $activity->activity_fee = 200;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'ลานธรรมกาย';
        $activity->description = 'มาร่วมกันเยอะๆนะ มีชั่วโมงกิจกรรม';
        $activity->contact = 'line id: lovelove';
        $activity->poster_path = 'https://images.unsplash.com/photo-1524443169398-9aa1ceab67d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dGVtcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60';
        $activity->budget = 10000;
        $activity->working_team_number = 33;
        $activity->verify = true;
        $activity->save();


        $activity = new Activity();         //id = 5
        $activity->activity_name = 'ไปน้ำตก เก็บขยะ';
        $activity->deadline = '10-02-2023';
        $activity->activity_type = 'อาสา';
        $activity->activity_category = 'ค้างคืน';
        $activity->user_id = 3; //คนสร้าง
        $activity->organizer_name = "คณะสังคมศาสตร์ เกษตรศาสตร์";
        $activity->activity_hours = 5;
        $activity->activity_start = '2024-03-1';
        $activity->activity_end = '2024-03-5';
        $activity->participant_number = 50;
        $activity->activity_fee = 200;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'น้ำตกพลิ้ว';
        $activity->description = 'ทำประโยชน์กันเถอะ มีชั่วโมงกิจกรรม';
        $activity->contact = 'ภาควิชาคอมพิวเตอร์';
        $activity->poster_path = 'https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d2F0ZXJmYWxsfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60';
        $activity->budget = 10000;
        $activity->working_team_number = 33;
        $activity->verify = true;
        $activity->save();



        $activity = new Activity();         //id = 6
        $activity->activity_name = 'ค่ายความรู้ สู่น้องๆ';
        $activity->deadline = '20-02-2024';
        $activity->activity_type = 'วิชาการ';
        $activity->activity_category = 'ค้างคืน';
        $activity->user_id = 3; //คนสร้าง
        $activity->organizer_name = "คณะเศรษฐศาสตร์ เกษตรศาสตร์";
        $activity->activity_hours = 5;
        $activity->activity_start = '2024-03-1';
        $activity->activity_end = '2024-03-5';
        $activity->participant_number = 30;
        $activity->activity_fee = 0;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'วัดป่า กทม';
        $activity->description = 'มากันได้น้า รับจำนวนจำกัด รีบสมัครเลย ฟรี มีชั่วโมงกิจกรรม';
        $activity->contact = 'คณะเศรษฐศาสตร์ ติดต่อสำนักงาน';
        $activity->poster_path = 'https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FtcCUyMGFjdGl2aXR5fGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60';
        $activity->budget = 10000;
        $activity->working_team_number = 15;
        $activity->verify = true;
        $activity->save();



        $activity = new Activity();         //id = 7
        $activity->activity_name = 'ให้ความรู้ ภาษาอังกฤษ';
        $activity->deadline = '20-02-2024';
        $activity->activity_type = 'วิชาการ';
        $activity->activity_category = 'ค้างคืน';
        $activity->user_id = 3; //คนสร้าง
        $activity->organizer_name = "มนุษยศาสตร์";
        $activity->activity_hours = 5;
        $activity->activity_start = '2024-03-1';
        $activity->activity_end = '2024-03-5';
        $activity->participant_number = 50;
        $activity->activity_fee = 200;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'วัดป่า กทม';
        $activity->description = 'ทำประโยชน์กันเถอะ มีชั่วโมงกิจกรรม';
        $activity->contact = 'Facebook: EngwithMe';
        $activity->poster_path = 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2hpbGR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60';
        $activity->budget = 10000;
        $activity->working_team_number = 33;
        $activity->verify = false;
        $activity->save();


        $activity = new Activity();         //id = 8
        $activity->activity_name = 'ค่ายอาสาช่วยน้อง';
        $activity->deadline = '15-02-2024';
        $activity->activity_type = 'อาสา';
        $activity->activity_category = 'ค้างคืน';
        $activity->user_id = 3; //คนสร้าง
        $activity->organizer_name = "มหาวิทยาลัยเกษตรศาสตร์";
        $activity->activity_hours = 5;
        $activity->activity_start = '2023-08-1';
        $activity->activity_end = '2023-08-5';
        $activity->participant_number = 25;
        $activity->activity_fee = 100;
        // $activity->organizer_id = 1;          // เอามาจาก id ของuser ที่เป็นคนสร้างactivityนั้นๆ ที่มีroleเป็นORGANIZER
        $activity->activity_place = 'ดอยเชียงใหม่';
        $activity->description = 'สนุกมากบอกเลย มีชั่วโมงกิจกรรม';
        $activity->contact = 'ku.ac.th';
        $activity->poster_path = 'https://images.unsplash.com/photo-1516627145497-ae6968895b74?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGNoaWxkfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60';
        $activity->budget = 10000;
        $activity->working_team_number = 3;
        $activity->verify = false;
        $activity->save();



        // $organizer_list = new OrganizerList();  //id =1
        // $organizer_list->user_id = 1;
        // $organizer_list->save();

        // $register_list = new RegisteredList();  //id =1
        // $register_list->user_id = 1;
        // $register_list->save();



        // $register_list->activities()->attach(5);    //user_id =1 สมัคร กิจกรรม5
        // $register_list->activities()->attach(6);    //user_id =1 สมัคร กิจกรรม6
        // $register_list->activities()->attach(7);    //user_id =1 สมัคร กิจกรรม7

        // $organizer_list->activities()->attach(1);   //user_id =1 อยู่ กิจกรรม1
        // $organizer_list->activities()->attach(2);   //user_id =1 อยู่ กิจกรรม2
        // $organizer_list->activities()->attach(3);   //user_id =1 อยู่ กิจกรรม3
        // $organizer_list->activities()->attach(4);   //user_id =1 อยู่ กิจกรรม4


        ////////////////

        // $organizer_list = new OrganizerList();  //id =2
        // $organizer_list->user_id = 2;
        // $organizer_list->save();

        // $register_list = new RegisteredList();  //id =2
        // $register_list->user_id = 2;
        // $register_list->save();



        // $register_list->activities()->attach(1);    //user_id =2 สมัคร กิจกรรม5
        // $register_list->activities()->attach(3);    //user_id =2 สมัคร กิจกรรม6
        // $register_list->activities()->attach(6);    //user_id =2 สมัคร กิจกรรม7

        // $organizer_list->activities()->attach(2);   //user_id =2 อยู่ กิจกรรม2
        // $organizer_list->activities()->attach(5);   //user_id =2 อยู่ กิจกรรม2
        // $organizer_list->activities()->attach(4);   //user_id =2 อยู่ กิจกรรม3
        // // $organizer_list->activities()->attach(4);   //user_id =2 อยู่ กิจกรรม4


    }
}
