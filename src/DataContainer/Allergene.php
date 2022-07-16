<?php

namespace LinkingYou\ContaoSpeisekarte\DataContainer;

use Contao\CoreBundle\Framework\ContaoFramework;
use LinkingYou\ContaoSpeisekarte\Model\ContaoSpeisekarteAllergeneModel;

class Allergene
{

    public function getAllergene()
    {

        $allergene = ContaoSpeisekarteAllergeneModel::findAll();

        $result = array();
        if (isset($allergene)) : {

                foreach ($allergene as $allergen) {
                    $result[$allergen->id] = $allergen->titel;
                };
            }
        endif;

        return $result;
    }

    public function getAllergenTitelById($id)
    {
        $zusatzstoff = ContaoSpeisekarteAllergeneModel::findOneBy('id', $id);
        if ($zusatzstoff) {
            return $zusatzstoff->titel;
        } else {
            return null;
        }
    }

    public function getAllergenKuerzelById($id)
    {
        $zusatzstoff = ContaoSpeisekarteAllergeneModel::findOneBy('id', $id);
        if ($zusatzstoff) {
            return $zusatzstoff->kuerzel;
        } else {
            return null;
        }
    }
}
