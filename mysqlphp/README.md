# **MySQL.php**

## Odkaz na kód
[Zde](https://github.com/Karel63/phpworks/tree/main/mysqlphp/MySQL.php)

## Nevyřešené problémy:
- funkce insert, delete a update vždy vrací true, protože jsem nepřišel na to, jak zkontrolovat že se funkce provedla správně, neuměl jsem správně využít poznatky ze školy

## Vyřešené problémy (20.3.2023):
- kód vidí query (u funkcí select, insert, update a delete) jako neznámou funkci
- u public function connect jsem nepochopil výstup "?static" z popisků v IDB.php
- u public function connect jsem musel přidat informace pro údaje napřímo, pokud jsem se je snažil přidávat mimo tuto funkci, tak mi to házelo chybu za nedostatek přidělených informací
- u funkce select jsem nepochopil vstupní string $query, použil jsem ho jako $table, protože jsem si nebyl jistý, jak ninak bych zde výběr tabulky definoval
