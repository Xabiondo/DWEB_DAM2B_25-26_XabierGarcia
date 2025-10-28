"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Empresa = void 0;
var Programador_1 = require("./Programador");
var Empresa = /** @class */ (function () {
    function Empresa(empleados, nombre) {
        this.empleados = empleados;
        this.nombre = nombre;
    }
    Empresa.prototype.añadirEmpleado = function (empleado) {
        var indice = this.empleados.length;
        this.empleados[indice - 1] = empleado;
    };
    Empresa.prototype.mostarEmpleados = function () {
        var str = " ";
        this.empleados.forEach(function (element) {
            str = str + element.mostrarInfo();
            str = str + ' \n';
        });
        return str;
    };
    Empresa.prototype.calcularGastoTotal = function () {
        var dinero = 0;
        this.empleados.forEach(function (element) {
            if (element instanceof Programador_1.Programador) {
                dinero = dinero + element.mostrarAnual() + element.primaAdicional();
            }
            else
                dinero = dinero + element.mostrarAnual();
        });
        return dinero;
    };
    return Empresa;
}());
exports.Empresa = Empresa;
