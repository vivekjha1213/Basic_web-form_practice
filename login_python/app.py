from flask import Flask, request
import mysql.connector

app = Flask(__name__)

# Connect to the database
conn = mysql.connector.connect(
    host="host_name",
    user="username",
    password="password",
    database="database_name"
)

cursor = conn.cursor()

@app.route('/')
def index():
    return ('index.html')
     


@app.route('/submit', methods=['POST'])
def submit():
    # Get form data
    name = request.form['name']
    email = request.form['email']
    message = request.form['message']

    # Insert data into the database
    sql = "INSERT INTO messages (name, email, message) VALUES (%s, %s, %s)"
    val = (name, email, message)
    cursor.execute(sql, val)

    conn.commit()

    return "Data added successfully"

if __name__ == '__main__':
    app.run(debug=True)

# Close the connection
cursor.close()
conn.close()
