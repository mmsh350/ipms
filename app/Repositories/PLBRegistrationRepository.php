<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class PLBRegistrationRepository
{
    public function getRegistrationDetails($trackingNo)
    {
        // $query = DB::table('TT_MailRegistration AS mr')
        //     ->select([
        //         'mr.TransactionDate',
        //         'mr.TransactionTime',
        //         'mct.MailClassName',
        //         'mst.ServiceName',
        //         'mr.DestinationPostOfficeName',
        //         'mr.Zone',
        //         'mcc.ContentCategory',
        //         'mr.MailContent',
        //         'mr.SenderFirstName',
        //         'mr.SenderAddress',
        //         'mr.SenderMobile',
        //         'mr.ReceiverFirstName',
        //         'mr.ReceiverAddress',
        //         'mr.ReceiverMobile',
        //     ])
        //     ->join('MT_MailClassType AS mct', 'mr.MailClassId', '=', 'mct.MailClassId')
        //     ->join('MT_ServiceType AS mst', 'mr.ServiceTypeId', '=', 'mst.ServiceID')
        //     ->join('MT_ContentCategory AS mcc', 'mr.ContentCategory', '=', 'mcc.ContentID')
        //     ->where('mr.MailItemId', $trackingNo)
        //     ->first();

        // return $query;
    }
}
