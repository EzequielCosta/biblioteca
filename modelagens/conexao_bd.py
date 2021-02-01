import psycopg2

arquivo = open("sql_bairros.sql", "r")
arquivo2 = open("sql_bairros2.sql", "a")
linhas = arquivo.read().splitlines();

con = psycopg2.connect(host='localhost', database='biblioteca',
user='postgres', password='postgres')
cur = con.cursor()

for i in range(len(linhas)):
       
    sql = "select id from estado where sigla = '{0}';".format(i[-5]+i[-4])
    cur.execute(sql)
    con.commit()
        

con.close()
arquivo.close();

