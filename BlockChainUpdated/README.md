# **Blockchain**

## IChain.php
- Třída IChain je interface pro Třídu Chain.
- [Odkaz na IChain.php](https://github.com/Karel63/Projects/blob/main/Hotel/Faze0/hotel.fig)

## Block.php
- idMain slouží jako primární klíč, který se zvyšuje při každém novém přidaném blocku. 
- hashLast slouží k ukládání posledního vytvořeného hashe.
- id slouží jako hlavní identifikátor blocku.
- value je hodnota či název daného blocku.
- hash je pro hashování předchozího hashe, id a value. Jsou rozdělené znakem "|".
- [Odkaz na Block.php](https://github.com/Karel63/Projects/blob/main/Hotel/Faze0/hotel.fig)

## Chain.php
- data slouží k ukládání všech přidaných blocků přes funkci addBlock.
- dataMain slouží k počítání přidaných blocků.
- Funkce addBlock slouží k přidání nového blocku do chainu.
- Funkce getBlock získává určitý block ze zadaného id.
- Funkce getBlocks získává všechny blocky v chainu.
- FUnkce getLastBlock získává poslední uložený block v chainu.
- Funkce isValid zjišťuje, jestli daný chain je validní podle toho, jestli poslední hash sedí s kombinací všech ostatních podle pravidel. 
- Funkce getContent slouží k získávání a pro konvertování objektů v chainu na array.
- [Odkaz na Chain.php](https://github.com/Karel63/Projects/tree/main/Hotel/Faze1)

## Index.php
- Tento soubor je pro zadávání a testování příkazů.
- [Odkaz na Index.php](https://github.com/Karel63/Projects/tree/main/Hotel/Faze2)

## UML class diagram
![UmlClassDiagram](http://url/to/img.png) 