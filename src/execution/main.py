import argparse
import json
import sys

laravel = {}
parser = argparse.ArgumentParser(description="Process dynamic input data")
parser.add_argument("data", help="JSON data as input", type=str)
args = parser.parse_args()
data = json.loads(args.data)
for key, value in data.items():
    laravel[key] = value


print(laravel['t'])
