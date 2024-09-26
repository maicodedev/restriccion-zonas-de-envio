add_filter('woocommerce_states', 'eliminar_provincias');

function eliminar_provincias( $provincias ) {
    if ( isset($provincias['ES']) ) {
        unset($provincias['ES']['TF']); // Tenerife
        unset($provincias['ES']['GC']); // Gran Canaria
        unset($provincias['ES']['CE']); // Ceuta
        unset($provincias['ES']['ML']); // Melilla
        unset($provincias['ES']['PM']); // Palma de Mallorca
        unset($provincias['ES']['IB']); // Islas Baleares
    }
    return $provincias;
}
