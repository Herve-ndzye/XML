for $x in doc("Menu.xml")/breakfast_menu/food
    where $x/calories > 350
    return $x/name