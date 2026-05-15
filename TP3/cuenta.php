<? php 

class Banco {
    private $colCuentaCorriente;
    private $colCajaAhorro;
    private $ultValorAsignado;
    private $colClientes;

    public function __construct(){
        $this->colCuentaCorriente = [];
        $this->colCajaAhorro = [];
        $this->colClientes = [];
        $this->ultValorAsignado = 0;
    }

    public function incorporarCliente ($elCliente){
        if (in_array($elCliente, $this->colClientes)) {
            $exito = false   
        };
    };
}