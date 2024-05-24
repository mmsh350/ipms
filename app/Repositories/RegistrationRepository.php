<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class RegistrationRepository
{
    public function getRegistrationDetails($trackingNo)
    {

        $queryResults = [];

        $query1 = DB::table('TT_MailRegistration AS mr')
            ->select([
                'mr.TransactionDate',
                'mr.TransactionTime',
                'mct.MailClassName',
                'mst.ServiceName',
                'mrt.MailRegisterName',
                'pt.PaymentTypeName',
                'eid.Description',
                'mr.SourcePostOfficeName',
                'mr.DestinationPostOfficeName',
                'mr.Zone',
                'mcc.ContentCategory',
                'mr.MailContent',
                'mr.SenderFirstName',
                'mr.SenderMiddleName',
                'mr.SenderLastName',
                'mr.SenderAddress',
                'mr.SenderTown',
                'mr.SenderTelephone',
                'mr.SenderMobile',
                'mr.SenderEmail',
                'mr.ReceiverFirstName',
                'mr.ReceiverMiddleName',
                'mr.ReceiverLastName',
                'mr.ReceiverAddress',
                'mr.ReceiverTown',
                'mr.ReceiverTelephone',
                'mr.ReceiverMobile',
                'mr.ReceiverEmail',
            ])

            ->join('MT_MailClassType AS mct', 'mr.MailClassId', '=', 'mct.MailClassId')
            ->join('MT_ServiceType AS mst', 'mr.ServiceTypeId', '=', 'mst.ServiceID')
            ->join('MT_ContentCategory AS mcc', 'mr.ContentCategory', '=', 'mcc.ContentID')
            ->join('MT_MailRegistrationType AS mrt', 'mr.MailRegistrationTypeId', '=', 'mrt.MailRegistrationTypeId')
            ->join('MT_PaymentType AS pt', 'mr.PaymentTypeId', '=', 'pt.PaymentTypeId')
            ->join('MT_EmsItemDescription AS eid', 'mr.DescriptionId', '=', 'eid.DescriptionId')
            ->where('mr.MailItemId', $trackingNo)
            ->first();

        $query2 = DB::table('TT_EmsBill')
            ->select([
                'Weight',
                'Box1',
                'Box2',
                'Box3',
                'Box4',
                'Box5',
                'Qty1',
                'Qty2',
                'Qty3',
                'Qty4',
                'Qty5',
                'Amt1',
                'Amt2',
                'Amt3',
                'Amt4',
                'Amt5',
                'Rate1',
                'Rate2',
                'Rate3',
                'Rate4',
                'Rate5',
                'TarrifAmount',
                'ServiceCharges',
                'Packaging',
                'Forwarding',
                'Wrapper_Qty',
                'Wrapper_Amt',
                'PrepaidDiscount',
                'CashDiscount',
                'Vat',
                'TotalAmount',
            ])
            ->where('MailItemId', $trackingNo)
            ->first();

        $queryResults['Registration'] = $query1;
        $queryResults['Bills'] = $query2;

        return $queryResults;
    }
}
