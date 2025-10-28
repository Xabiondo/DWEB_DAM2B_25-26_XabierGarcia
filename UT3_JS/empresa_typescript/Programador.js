"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
exports.Programador = void 0;
var empleado_1 = require("./empleado");
var Programador = /** @class */ (function (_super) {
    __extends(Programador, _super);
    function Programador(nombre, edad, salario, lenguajeProgramacion, numProyectos) {
        var _this = _super.call(this, nombre, edad, salario) || this;
        _this.lenguajeProgramacion = lenguajeProgramacion;
        _this.numProyectos = numProyectos;
        return _this;
    }
    Programador.prototype.infoProgramador = function () {
        var str = _super.prototype.mostrarInfo.call(this);
        str = str + "  , es programador , y usa lenguaje de programación " + this.lenguajeProgramacion + " y tiene  " + this.numProyectos + " número de proyectos";
        return str;
    };
    Programador.prototype.primaAdicional = function () {
        var prima = this.salario * (this.numProyectos * 1.15);
        return prima;
    };
    return Programador;
}(empleado_1.Empleado));
exports.Programador = Programador;
