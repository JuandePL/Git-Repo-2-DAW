# Hagamos un programa que te pida dos números, y te de la posibilidad
# de elegir calcular el resto de la división (teclea r), su división entera(teclea
# e) y su división con decimales (teclea d).

# Pedimos los números
num1 = int(input("Introduce el dividendo: "))
num2 = int(input("Introduce el divisor: "))

# Pedimos la operación deseada
print("----------------------------------------------")
print("Introduce la operación a realizar:")
print("- Calcular el resto de la división (r)")
print("- Calcular la división entera (e)")
print("- Calcular la división con decimales(d)")
operation = input("Operación: ")
print("----------------------------------------------")

# Operamos en funcion de la selección del usuario
if operation == 'r':
    print(f"El resto de {num1}/{num2} es {num1 % num2}")
elif operation == 'e':
    print(f"{num1}/{num2} = {int(num1 / num2)}")
elif operation == 'd':
    print(f"{num1}/{num2} = {num1 / num2}")
else:
    print("Operación no soportada.")
