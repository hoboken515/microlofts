#!/usr/bin/python

print("Content-type:text/html\r\n\r\n")
print("<html>")
print("<title>Show Table</title>")
print("<body>")

try:
    import sys
    import cgi, cgitb
    import MySQLdb
except ImportError as e:
    print("ERRORS: Unable to load dependencies. "+str(e))

def main():
    # Create instance of FieldStorage
    form = cgi.FieldStorage()

    # Get data from fields
    database_name = form.getvalue('database')
    table_name  = form.getvalue('table')
    select = form.getvalue('select')
    query_param = form.getvalue('query_param')

    # Open database connection
    db = MySQLdb.connect("cs4370.com","g01admin","BpVfaWB9MktO",database_name )

    # prepare a cursor object using cursor() method
    cursor = db.cursor()

    sql_request = "select "+select+" from "+table_name
    sql_request += ';'



    print("<p>")
    print("<table border=1>")
    try:
        # Execute the SQL command
        cursor.execute(sql_request)
        # Fetch all the rows in a list of lists.
        results = cursor.fetchall()
        print("<tr>")
        for col in cursor.description:
            print("<td>"+str(col[0])+"</td>")
        print("</tr>")
        for cols in results:
            print("<tr>")
            for col in cols:
                print("<td>"+str(col)+"</td>")
            print("</tr>")
        print("</table>")
    except Exception as e:
        print("Error: unable to fecth data:"+str(e))

    db.close()

# end main()

try:
    main()
except NameError:
    print("Could Not Execute Main Function.")

print("</p>")
print("</body>")
print("</html>")

sys.exit(0)