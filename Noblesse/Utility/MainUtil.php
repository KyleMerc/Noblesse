<?php

namespace Noblesse\Utility;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\Character;
use Noblesse\Character\Factory\NewCharacterFactory;

abstract class MainUtil
{
    /**
     * Default values is instantiated in object creation.
     * @param string $option
     * @return Character
     */
    public static function mainCharacter(string $opt)
    {
        switch (strtoupper($opt)) {
            case 'F':
                $character = NewCharacterFactory::makeCharacter('SuperModifiedHuman');
                return $character;
            case 'M':
                return NewCharacterFactory::makeCharacter('Werewolf');
            case 'M2':
                return NewCharacterFactory::makeCharacter('SimpleModifiedHuman');
            case 'H':
                return NewCharacterFactory::makeCharacter('Human');
            default:
                return NULL;
        }
    }

    /**
     * I've only created 1 enemy for now
     * @param string $option
     * @return \Noblesse\Character\Character
     */
    public static function enemyCharacter(string $opt)
    {
        switch (strtoupper($opt)) {
            case 'V':
                return NewCharacterFactory::makeCharacter('Vampire');
            default:
                return NULL;
        }
    }

    /**
     * @param \Noblesse\Character\Character $mainChar
     * @param \Noblesse\Character\Character $enemy
     * 
     * @return string fleed, victory, game over
     */
    public static function battleStart(Character $mainChar, Character $enemyChar, bool $enemyWaiting = false)
    {
        $main  = $mainChar->getName();
        $enemy = $enemyChar->getName() . '(' . $enemyChar->getCharType() . ')';

        $lineLength = strlen($enemy.$main) + 4;
        $line       = '';

        while ($lineLength > 0) {
            $line .= '-';
            $lineLength--;
        }

        $menuBattle = '
            Attack enemy [atk] / [attack]
            Run away     [run]';

        $battleMsg = "
            $main vs $enemy
            $line
            2 actions available
            $menuBattle
            $line\n";

        echo "\t    A battle has started\n";

        if ($enemyWaiting) {  #Set at the call of the function
            echo "\n\t    Enemy was waiting at the the door!\n";
            echo $enemyChar->attack($mainChar);
        }

        while (true) {
            echo $battleMsg;
            $option = readline("\t    Choose: ");
            echo "\n";

            if (strtolower($option) === 'atk') {
                echo "\t    ============\n";
                echo $mainChar->attack($enemyChar) . "\n";
                sleep(1);
                echo $enemyChar->attack($mainChar);
                echo "\t    ============\n";
                sleep(1);
                if($enemyChar->getHealth() == 0) {
                    echo "\t    You have killed the enemy\n";
                    return 'victory';
                } elseif ($mainChar->getHealth() == 0) {
                    echo "\t    You have been killed\n";
                    return 'game over';
                }
            } elseif (strtolower($option) === 'flee' || strtolower($option) === 'run') {
                // $flee = $mainChar->flee();
                echo "\t    You ran away\n";
                break;
            } else echo "\t    Invalid command\n";
        }
    }

    public static function mainMenu()
    {
        $menu = "";
    }
}