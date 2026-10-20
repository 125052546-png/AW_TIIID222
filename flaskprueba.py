from flask import Flask
app = Flask(__name__)

@app.route("/")
def gome():
    return "Hola Andres!"

if __name__ == "__main__":
    app.run(port=5000)
    