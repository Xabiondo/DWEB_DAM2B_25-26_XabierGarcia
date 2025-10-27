class Empresa {
    empleados : Empleado[];
    nombre : string ;

    constructor(empleados : Empleado[] , nombre : string){
        this.empleados = empleados ; 
        this.nombre = nombre; 
    }

    añadirEmpleado(empleado : Empleado){
        let indice: number = this.empleados.length;

        this.empleados[indice - 1 ] = empleado;


    }
    mostarEmpleados() : string{
        let str :string = " "; 
        this.empleados.forEach(element => {
            str = str + element.mostrarInfo;
            str = str + ' \n'

            
        });
        return str ; 
    }
    calcularGastoTotal(): number{
        let dinero : number = 0 ; 

        this.empleados.forEach(element => {
            if(  element instanceof Programador){
                dinero = dinero + element.mostrarAnual() + element.primaAdicional();


            }else dinero = dinero + element.mostrarAnual();
            
        });
        return dinero ; 
        

    }


}