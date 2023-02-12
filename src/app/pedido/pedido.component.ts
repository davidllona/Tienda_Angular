import { ThisReceiver } from '@angular/compiler';
import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { Pedido } from '../models/pedido';

import Swal from 'sweetalert2';

@Component({
  selector: 'app-pedido',
  templateUrl: './pedido.component.html',
  styleUrls: ['./pedido.component.css']
})
export class PedidoComponent {

  pedido:Pedido = {} as Pedido;

  nombreOk = true;
  apellidoOk = true;
  direccionOk = true;
  provinciaOk = true;
  telefonoOk = true;
  emailOk = true;
  tarjetaOk = true;
  
  constructor(private servicio:MiServicioService, private router:Router){}

  finalizarpedido(){
    if(this.validarForm()){
      this.servicio.registrarPedido(this.pedido).subscribe(res => (res=="ok")?this.pedidoOk():alert("no se pudo registrar su pedido"));
    }
  }

  pedidoOk(){
    alert("pedido realizado correctamente, puedes seguir compando");
    this.router.navigate(["listado"]);
  }

  validarForm(){

  // Validación nombre  
    
  if(this.pedido.nombre === undefined){
    Swal.fire('Debes introducir un nombre', '','warning')
    this.nombreOk = false;
    return false;
  }if( /^[a-zA-Z]{3,30}$/.test(this.pedido.nombre)){
    this.nombreOk = true;
  }else{
    Swal.fire('Debes introducir un nombre valido', 'Nombre debe tener de 3 a 30 caracteres letras y espacio','error')
      this.nombreOk  = false;
      return false;
  }

  // Validación apellido
  if(this.pedido.apellido === undefined){
    Swal.fire('Debes introducir un apellido', '','warning')
      this.apellidoOk = false;
      return false;
    }
    if(/^[a-zA-Z0-9 ]{3,50}$/.test(this.pedido.direccion)){
      this.apellidoOk = true;
    }else{
      Swal.fire('Debes introducir un apellido valido', 'Nombre debe tener de 3 a 30 caracteres letras y espacio','error')
      this.apellidoOk = false;
      return false;
    }
  
  // Validación direccion
  if(this.pedido.direccion === undefined){
    Swal.fire('Debes introducir una direccion', '','warning')
    this.direccionOk = false;
    return false;
  }
  if(/^[a-zA-Z0-9 ]{5,50}$/.test(this.pedido.direccion)){
    this.direccionOk = true;
  }else{
    Swal.fire('Debes introducir una direccion valida', 'Dirección debe tener de 5 a 50 caracteres letras y espacio','error')
    this.direccionOk = false;
    return false;
  }

  // Validación provincia
  if(this.pedido.provincia === undefined){
    Swal.fire('Debes introducir una provincia', '','warning')
    this.provinciaOk = false;
    return false;
  }
  if(/^[a-zA-Z]{3,30}$/.test(this.pedido.provincia)){
    this.provinciaOk = true;
  }else{
    Swal.fire('Debes introducir una provincia valida', 'Provincia debe tener de 5 a 50 caracteres letras y espacio','error')
    this.provinciaOk = false;
    return false;
  }

  //Validación telefono
  if(this.pedido.telefono === undefined){
    Swal.fire('Debes introducir un telefono', '','warning')
    this.telefonoOk = false;
    return false;
  }
  if(/^[0-9]{9,9}$/.test(this.pedido.telefono)){
    this.telefonoOk = true;
  }else{
    Swal.fire('Debes introducir un teléfono valido', 'Telefono debe tener de 9 números','error')
    this.telefonoOk = false;
    return false;
  }

  //Validacion email
  if(this.pedido.email === undefined){
    Swal.fire('Debes introducir un email', '','warning')
    this.emailOk = false;
    return false;
  }
  if(/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/.test(this.pedido.email)){
    this.emailOk = true;
  }else{
    Swal.fire('Debes introducir un email valido', 'Ejemplo: alguien@gmail.com','error')
    this.emailOk = false;
    return false;
  }

  //Validacion numero tarjeta
  if(this.pedido.tarjeta === undefined){
    Swal.fire('Debes introducir un numero de tarjeta', '','warning')
    this.tarjetaOk = false;
    return false;
  }
  if(/^[0-9]{13,18}$/.test(this.pedido.tarjeta)){
    this.tarjetaOk = true;
  }else{
    Swal.fire('Debes introducir un numero de tarjeta valido', 'Tarjeta debe tener de 13 a 18 caracteres solo numeros','error')
    this.tarjetaOk = false;
    return false;
  }

  return true;
  
}
  
}
