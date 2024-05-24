<?php

namespace App\Http\Controllers;

use App\Repositories\PLBRegistrationRepository;
use App\Repositories\RegistrationRepository;
use App\Traits\HttpResponses;

class RegistrationDetailController extends Controller
{
    //
    use HttpResponses;

    public function show($trackingNo)
    {
        $part = substr($trackingNo, 0, 3);

        if (! in_array($part, ['PLB', 'BLB'])) {
            $repository = new RegistrationRepository();
        } else {
            $repository = new PLBRegistrationRepository();
        }

        $registrationDetails = $repository->getRegistrationDetails($trackingNo);

        //dd($registrationDetails);

        if (! $registrationDetails['Registration']) {
            return $this->error('Invalid Tracking Number', 404);
        }

        return $this->success(
            $registrationDetails,
            $trackingNo,
            $registrationDetails['Registration']->MailClassName
        );
    }
}
