# Implementa un programa en python que trabaje con un fichero de texto
# y donde se usen las funciones vistan en clase, por ejemplo open, close, read,...

name = input("Introduce tu nombre: ")
age = int(input("Introduce tu edad: "))

print("\nEscribiendo datos en fichero...")

f = open(f'fichero{name}.txt', 'w')
f.write(f"Nombre: {name}\n")
f.write(f"Edad: {age}")
f.close()

print("Fichero creado correctamente.", end="\n\n")
f = open(f'fichero{name}.txt', 'r')
print(f.read())
f.close()