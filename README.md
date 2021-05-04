### Observaciones 

## 11. Agregar métodos de pago

Si es posible dar un repaso del código escrito en esta lección asi como del flujo del mismo, pues esta dura 33 minutos,por ejemplo

1.- Se crea el controlador Billing y sus vistas correspondientes

2.- Se añade el link de datos de facturación 

3.- Se crea componente  Payment method create

4.- Se crea el Intent y se enviá en la vista del componente Payment method create 

5.- Se incluye el script de Stripe en en layout principal

6.- Se añaden los slots para css y js en el layout principal 

7.- Se le dan estilos al componente de Payment 

8.- Se añade comportamiento de validación de errores 

9.- Se emite el intent al componente y se añade al método de pago del usuario 


El razón de esta recomendación es debido a que la naturaleza del tema te obliga a darle tiempo a los estilos del tailwind
eso le da valor agregado pero hace que el video sea largo y uno pueda perderse en el flujo del código.


## 12. Proteger rutas 

Posible error, verificar código

Para este escenario, se crea un usuario nuevo, se prueba que el middleware proteja los post, esto funciona, al ser 
redirigido a la sección de billing, ya que el usuario es nuevo, se registra un método de pago, esto funciona correctamente,
al registrar el nuevo método de pago se recargan los botones y muestran el texto "Subscribirse", pero al dar click este no
ejecuta la acción. La consola no reporta errores pero si la siguiente alerta

You may test your Stripe.js integration over HTTP. However, live Stripe.js integrations must use HTTPS.
