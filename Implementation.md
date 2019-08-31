### 4 character concrete classes
1. SimpleModifiedHuman
2. SuperModifiedHuman
3. Vampire
4. Werewolf
5. Human

### 2 character interfaces
1. CharacterInterface
2. ModifiedHumanInterface

### 1 constant namespace
1. CharHelpers

### 2 abstract classes
1. Character
2. CharacterFactory

**Explanation**
To create a character use the
Char::mainCharacter(); 1 param: letter string = h, m, m2, f
Char::enemyCharacter(); 1 param: letter string = v

To see the status use the
Status::status(); 1 param: Character object
                    example: $mainChar = Char::mainCharacter('h), $enemyChar = Char::enemyCharacter('v)

To battle against enemy use the
Char::battleStart() 3 param: 1st Character $mainChar  , 2nd Character $enemyChar, 3rd boolean $enemyWaiting - an ambush
                    return string: 'victory' or 'game over'
                    example: Char::battleStart($mainChar, $enemyChar, true);
