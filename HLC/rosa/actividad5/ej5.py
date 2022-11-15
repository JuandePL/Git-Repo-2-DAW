# 5.- Realiza una función que calcule el área de un polígono
# regular, dado el lado y la apotema del polígono. El polígono
# regular puede ser un pentágono, hexágono, heptágono y
# octógono, también será un dato de entrada el tipo de polígono.

# Formula Poligono: http://www.calculararea.com/images/formulaPoligono.png
def getAreaPoligono(lado, apotema, numLados):
    perimetro = lado * numLados
    return (perimetro * apotema) / 2


print("Bienvenido al programa, aquí podrás calcular el área de un polígono regular.")
lado = int(input("Introduce la longitud del lado: "))
apotema = int(input("Ahora introduce la longitud del apotema: "))
numLados = int(input("¿Cuántos lados tiene tu polígono?: "))

print(f'\nEl área de tu polígono es {getAreaPoligono(lado, apotema, numLados)}m²')
