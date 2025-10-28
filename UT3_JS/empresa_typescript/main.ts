import {Programador} from './Programador' 
import { Empleado  } from './empleado';
import {Empresa} from './Empresa'


let xabi = new Programador("xabi" , 20 , 7000 , "todos" , 9);
let iban = new Empleado("iban" , 20 , 850);

let empleados : Empleado[] = [xabi , iban]

let empresa = new Empresa(empleados ,"xabisCompany");

console.log(empresa.calcularGastoTotal())
console.log(empresa.mostarEmpleados())


 