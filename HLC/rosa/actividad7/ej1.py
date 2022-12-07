# 1.- Vamos a crear un programa en python donde vamos a declarar un
# diccionario para guardar los precios de las distintas frutas. El programa pedirá
# el nombre de la fruta y la cantidad que se ha vendido y nos mostrará el precio
# final de la fruta a partir de los datos guardados en el diccionario. Si la fruta no
# existe nos dará un error. Tras cada consulta el programa nos preguntará si
# queremos hacer otra consulta.

def otraConsulta():
    respuesta = input("\n¿Quieres hacer otra consulta? (Y/n): ")

    return True if respuesta != 'n' else False


# Precio en centimos
diccionarioFrutas = {"pera": 50, "manzana": 70, "platano": 45, "mandarina": 60}

# Bucle infinito hasta que el usuario salga del programa
while True:
    try:
        fruta = input("Bienvenido al programa, introduce una fruta: ")

        if (fruta not in diccionarioFrutas):
            print("La fruta no existe")
            continue
        else:
            cantidad = int(
                input(f"Introduce la cantidad vendida de {fruta}s: "))

            # Calcular precio y pasarlo a 2 decimales
            precio = (diccionarioFrutas.get(fruta) * cantidad) / 100

            print(f"El precio final de las {fruta}s es {precio}€")
    except ValueError:
        print("\nERROR: La cantidad introducida no es válida.")
    finally:
        if (not otraConsulta()):
            print("Gracias por usar el programa.")
            break
