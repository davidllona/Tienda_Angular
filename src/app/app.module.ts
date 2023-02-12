import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import{HttpClientModule} from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ListadoComponent } from './listado/listado.component';
import { CarritoComponent } from './carrito/carrito.component';
import { PedidoComponent } from './pedido/pedido.component';
import { ZapatillaDetallesComponent } from './zapatilla-detalles/zapatilla-detalles.component';
import { SearchPipe } from './pipes/search.pipe';


import { FormsModule } from '@angular/forms';
import { FavoritoComponent } from './favorito/favorito.component';
@NgModule({
  declarations: [
    AppComponent,
    ListadoComponent,
    CarritoComponent,
    PedidoComponent,
    ZapatillaDetallesComponent,
    FavoritoComponent,
    SearchPipe
  ],
  imports: [
    FormsModule,
    HttpClientModule,
    BrowserModule,
    AppRoutingModule
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
