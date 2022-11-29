# Modifica los ejercicios 4 y 5 de la ACTIVIDAD_5
# y define captura de errores con TRY EXCEPT en caso de que el usuario
# no introduzca correctamente los datos en el programa.
# Vuelve a mandar el código con las modificaciones.

# 5.- Realiza una función que calcule el área de un polígono
# regular, dado el lado y la apotema del polígono. El polígono
# regular puede ser un pentágono, hexágono, heptágono y
# octógono, también será un dato de entrada el tipo de polígono.

# Formula Poligono: http://www.calculararea.com/images/formulaPoligono.png
def getAreaPoligono(lado, apotema, numLados):
    perimetro = lado * numLados
    return (perimetro * apotema) / 2

print("Bienvenido al programa, aquí podrás calcular el área de un polígono regular.")

while True:
    try:
        lado = int(input("Introduce la longitud del lado: "))
        apotema = int(input("Ahora introduce la longitud del apotema: "))
        numLados = int(input("¿Cuántos lados tiene tu polígono?: "))
    except ValueError:
        print("\nEl valor introducido no es válido.\n")
    else:
        print(f'\nEl área de tu polígono es {getAreaPoligono(lado, apotema, numLados)}m²')
        break
