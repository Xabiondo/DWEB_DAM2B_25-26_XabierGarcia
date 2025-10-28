export class Empleado{
    nombre : string;
    edad : number ; 
    salario : number ; 

    constructor(nombre : string , edad : number , salario: number){
        this.nombre = nombre;
        this.edad = edad ; 
        this.salario = salario ;
        
    }
    public mostrarInfo(): string{
        var str : string = this.nombre + "  tiene  " + this.edad + "  y cobra  " + this.salario
        return str;

    }
    public mostrarAnual() : number{
        return this.salario*12;
    }
}