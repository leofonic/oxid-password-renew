<?php

namespace zunderweb\password_renew\component
;
class UserComponent extends UserComponent_parent
{
    public function login_noredirect()
    {
        
        $sUser = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('lgn_usr');
        $sPassword = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('lgn_pwd', true);
        
        if ($sUser){
            
            $oDb = \OxidEsales\Eshop\Core\DatabaseProvider::getDb();
            
            $sPassSelect = "Select oxpassword from oxuser where oxusername = " . $oDb->quote($sUser);
            $sPass = $oDb->getOne($sPassSelect);
            if ($sPass === ''){
                $sError = 'PASSWORD_RENEW_ERROR';
                \OxidEsales\Eshop\Core\Registry::getUtilsView()->addErrorToDisplay($sError, false, true);
                return 'user';
            }
        }
        
        parent::login_noredirect();
    }
}