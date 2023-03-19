# **MySQL.php**

## Odkaz na kód
[Zde](https://github.com/Karel63/phpworks/tree/main/mysqlphp/MySQL.php)

## Poznámky k nedostatkům
### Kód při úpravách se mi podařilo sprovoznit, ale při implementaci IDB jsem už měl pár problémů, např:
- kód vidí query jako neznámou/nenadefinovanou funkci
- u public function connect nepochopil jsem výstup "?static" z popisů v IDB.php
### Ostatní problémy:
- u public function connect jsem musel přidat informace pro údaje napřímo, pokud jsem se je snažil přidávat mimo tuto funkci, tak mi to házelo chybu za nedostatek přidělených informací
- funkce insert, delete a update vždy vrací true, protože jsem nepřišel na to, jak zkontrolovat že se funkce provedla správně
- u funkce select jsem nepochopil vstupní string $query, použil jsem ho jako $table, protože jsem si nebyl jistý, jak ninak bych zde výběr tabulky definoval
