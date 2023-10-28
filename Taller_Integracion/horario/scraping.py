import requests 
import pandas as pd
url_cursos = "https://directoriosalas.uct.cl/json/carga_curso.php"

params_cursos = {
    "anho": "2023",
    "semestre": "2",
}

r_cursos = requests.get(url_cursos, params=params_cursos)

data_cursos = r_cursos.json()

# Corregir el error tipográfico aquí
df_cursos = pd.DataFrame(data_cursos["cursos"])

df_cursos.to_csv("cursos.csv", index=False)
