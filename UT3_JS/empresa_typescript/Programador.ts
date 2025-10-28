import { Empleado } from "./empleado";

export class Programador extends Empleado{
    lenguajeProgramacion : string ; 
    numProyectos : number ; 

    constructor(nombre : string , edad : number , salario : number , lenguajeProgramacion : string , numProyectos : number){
        super(nombre , edad ,salario);
        this.lenguajeProgramacion = lenguajeProgramacion; 
        this.numProyectos = numProyectos; 

    }

    public infoProgramador(): string{

        let str : string = super.mostrarInfo();
        str = str + "  , es programador , y usa lenguaje de programación " + this.lenguajeProgramacion + " y tiene  " + this.numProyectos + " número de proyectos"
        return str; 

    }
    public primaAdicional(): number{
        let prima : number = this.salario * (this.numProyectos * 1.15)
        return prima; 
    }

}