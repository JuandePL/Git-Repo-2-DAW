from math import sqrt


print("Programa para la resolucion de la ecuacion a x*x + b x + c = 0")

a = float(input("Valor de a: "))
b = float(input("Valor de b: "))
c = float(input("Valor de c: "))

multiplicacion = b**2 - 4*a*c

if a != 0:
    if multiplicacion >= 0:
        x1 = (-b + sqrt(multiplicacion)) / (2*a)
        x2 = (-b - sqrt(multiplicacion)) / (2*a)
        if x1 == x2:
            print(f"Solución: {x1}")
        else:
            print(f'Soluciones: x1={x1} | x2={x2}')
    else:
        print("No hay soluciones reales.")
else:
    if b != 0:
        x = -c / b
        print(f"Solución: {x}")
    else:
        if c != 0:
            print("La ecuacion no tiene solucion")
        else:
            print("La ecuacion tiene inifnitas soluciones.")
