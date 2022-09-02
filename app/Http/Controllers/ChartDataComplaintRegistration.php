<?php

namespace App\Http\Controllers;

use App\Models\ComplaintRegistration;
use Illuminate\Http\Request;

class ChartDataComplaintRegistration extends Controller
{

    function getAllMonths()
    {

        $month_array = array();
        $complaint_registration_dates = ComplaintRegistration::orderBy('created_at', 'ASC')->pluck('created_at');
        $complaint_registration_dates = json_decode($complaint_registration_dates);

        if (!empty($complaint_registration_dates)) {
            foreach ($complaint_registration_dates as $unformatted_date) {
                $date = new \DateTime($unformatted_date);
                $month_no = $date->format('m');
                $month_name = $date->format('M');
                $month_array[$month_no] = $month_name;
            }
        }
        return $month_array;
    }

    function getMonthlyPostCount($month)
    {
        $monthly_complaint_registration_count = ComplaintRegistration::whereMonth('created_at', $month)->get()->count();
        return $monthly_complaint_registration_count;
    }

    function getMonthlyComplaintRegistrationData()
    {

        $monthly_complaint_registration_count_array = array();
        $month_array = $this->getAllMonths();
        $month_name_array = array();
        if (!empty($month_array)) {
            foreach ($month_array as $month_no => $month_name) {
                $monthly_complaint_registration_count = $this->getMonthlyPostCount($month_no);
                array_push($monthly_complaint_registration_count_array, $monthly_complaint_registration_count);
                array_push($month_name_array, $month_name);
            }
        }

        $max_no = max($monthly_complaint_registration_count_array);
        $max = round(($max_no + 300 / 20) / 10) * 10;
        $monthly_complaint_registration_data_array = array(
            'months' => $month_name_array,
            'complaint_registration_count_data' => $monthly_complaint_registration_count_array,
            'max' => $max,
        );

        return $monthly_complaint_registration_data_array;
    }
}
