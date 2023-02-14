<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->delete();
        $projects = array(
            array('title' => "Vehicle Management System",'abbreviation'=>'VMS','description'=>'VMS Description','publish_status'=>1,'logo_image'=>'vms.jpg','banner_image'=>null),
            
            array('title' => "Integrated Financial Management System",'abbreviation'=>'IFMS','description'=>'Next Gen IFMS is a complete suite of applications used by Govt. of Punjab for planning, budgeting, Receipt and Expenditure control, Payment Processing, Debt Management and Audit. This state of art portal is owned by Department of Finance, Govt. of Punjab and developed by NIC Punjab. It has brought various stakeholders such as Administrative Departments, Accountant General, RBI and Banks on a single platform with role based Smart Dashboards. These Smart Dashboards have provided a better Decision Support System to all the stakeholders. It envisages end-to-end integration of various IT systems belongs to various stakeholders in Govt. of Punjab for efficient fund flow and payment-cum-accounting system.','publish_status'=>1,'logo_image'=>null,'banner_image'=>null ),
           
            array('title' => "Human Resource Management System",'abbreviation'=>'HRMS','description'=>'Human Resource Management (HRM) is the term used to describe formal systems devised for the management of people within an organization. The responsibilities of a human resource manager fall into three major areas: staffing, employee compensation and benefits, and defining/designing work.
            A Human Resources Management System (HRMS) is a software application that combines many human resources functions, including benefits administration, payroll, recruiting and training, and performance analysis and review into one package.
            Human Resource Management Systems provides a means of acquiring, storing, analyzing and distributing information to various stakeholders be it government, employee and to an extent to the citizen.
            An HRMS (Human Resource Management System) is considered a basic necessity in most of private/corporate and government organizations.','publish_status'=>1,'logo_image'=>'hrms.jpg','banner_image'=>null),
           
            array('title' => "Revenue Court Management System",'abbreviation'=>'RCMS','description'=>'RCMS-Punjab is a web-enabled Revenue Court Management System to facilitate management and monitoring of Court Cases pertaining to Revenue Courts. It has been designed specifically for all Revenue Courts in the state, which include Financial Commissioner, Divisional Commissioner, Director Land Records, Deputy Commissioner, SDM, Tehsildar and Naib Tehsildars courts.','publish_status'=>2,'logo_image'=>'rcms.jpg','banner_image'=>null),


            array('title' => "National Generic Document Registration System",'abbreviation'=>'NGDRS','description'=>'NGDRS Description','publish_status'=>2,'logo_image'=>null,'banner_image'=>null),

            array('title' => "Court Case Monitoring System",'abbreviation'=>'CCMS','description'=>'Court Cases Monitoring System (CCMSPb) facilitates departments / officers to manage and monitor court cases of any type pending in different courts. It can provide latest information about any pending case of any point of time. CCMSPb helps the departments/officers to track the cases, prepare cause-list well in advance, maintain complete history of the case including follow-up action taken part from other activites. CCMSPb can generate a number of MIS reports including query based reports based on given parametric values.','publish_status'=>1,'logo_image'=>null,'banner_image'=>null),

            array('title' => "Mera Ghar Mere Naam",'abbreviation'=>'MGMN','description'=>'Punjab Mera Ghar Mera Naam scheme has been launched in order to bestow property rights to the people who are living in houses that are situated within the Lal Dora of villages and cities. Around 12700 villages will be covered under this scheme. Lal Dora is basically a village or town settlement that comprises a cluster of houses where residents live. The residents of Lal Dora were not having ownership rights but this scheme will provide them the ownership rights. For this purpose, the revenue department will carry out a drone survey in rural and urban areas for Digital Mapping. The entire process of providing property rights will be completed.','publish_status'=>1,'logo_image'=>null,'banner_image'=>null),

            array('title' => "Armed Licensed Issuance System",'abbreviation'=>'ALIS','description'=>'National Database of Arms Licenses-Arms License Issuance System (NDAL-ALIS) is a portal developed by the Ministry of Home Affairs to facilitate entrepreneurs and industries applying for licenses related to manufacture of arms and ammunition and to facilitate individuals applying for arms licenses under Arms Act, 1959 and Arms Rules, 2016. This portal offers 29 services for the applicants. This facility provides impetus to the Make in India initiative of the Government of India by promoting ease of doing business.','publish_status'=>1,'logo_image'=>null,'banner_image'=>null),

        );
        DB::table('projects')->insert($projects);
    }
}
