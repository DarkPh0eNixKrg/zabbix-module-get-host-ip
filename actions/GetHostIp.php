<?php declare(strict_types = 1);

namespace Modules\GetHostIp\Actions;

use API;
use CControllerResponseData;
use CController as CAction;

class gethostip extends CAction {
        protected function init() {
                $this->disableSIDValidation();
        }

        protected function checkInput() {
                return true;
        }

        protected function checkPermissions() {
                return true;
        }

        protected function doAction() {
                $this->validateInput(['hostid' => 'required|db hosts.hostid']);
                $hostid = $this->getInput('hostid');
                $hostResponse = API::HostInterface()->get(['output' => 'extend', 'hostids' => $hostid]);
                $this->setResponse(new CControllerResponseData(['main_block' => $hostResponse[0]['ip']]));
        }
}
