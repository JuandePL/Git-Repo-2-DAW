# 1.- Vamos a crear un programa en python donde vamos a declarar un
# diccionario para guardar los precios de las distintas frutas. El programa pedirá
# el nombre de la fruta y la cantidad que se ha vendido y nos mostrará el precio
# final de la fruta a partir de los datos guardados en el diccionario. Si la fruta no
# existe nos dará un error. Tras cada consulta el programa nos preguntará si
# queremos hacer otra consulta.

def otraConsulta():
    respuesta = int(input("¿Quieres hacer otra consulta? (y/N): "))

    return True if respuesta == 'y' else False

# Precio en centimos
diccionarioFrutas = {"pera": 50, "manzana": 70, "platano": 45, "mandarina": 60}

# Bucle infinito hasta que el usuario salga del programa
while True:    
    fruta = input("Bienvenido al programa, introduce una fruta: ")

    if (fruta in diccionarioFrutas):
        cantidad = input(f"Introduce la cantidad vendida de {fruta}s: ")

