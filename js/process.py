import pandas as pd
import pathlib as pl

dataFile = pl.Path(".")
pl.Path.joinpath("bad-words.csv")

file = pd.read_csv(dataFile)

print(file.to_string())