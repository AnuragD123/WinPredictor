
import pandas as pd
import numpy as np
import pickle
import sys
from sklearn.metrics import accuracy_score
from sklearn.linear_model import LogisticRegression
from sklearn.ensemble import RandomForestClassifier
from sklearn.pipeline import Pipeline
from sklearn.compose import ColumnTransformer
from sklearn.preprocessing import OneHotEncoder
import warnings
warnings.filterwarnings('ignore')


# data = ["CSK","MI","Bengaluru",192,102,14,6]
data = [sys.argv[1],sys.argv[2],sys.argv[3],sys.argv[4],sys.argv[5],sys.argv[6],sys.argv[7]]



fm = pickle.load(open('pipe.pkl','rb'))


teams ={
    "SRH":"Sunrisers Hyderabad",
    "MI": "Mumbai Indians",
    "CSK": "Chennai Super Kings",
    "RR": "Rajasthan Royals",
    "RCB": "Royal Challengers Bangalore",
    "KKR":"Kolkata Knight Riders",
    "DC": "Delhi Capitals",
    "KXIP": "Kings XI Punjab"
    
    }

battingteam = teams[data[0]]

bowlingteam = teams[data[1]]

city = data[2]
target =int(data[3])
score= int(data[4])
oversCompleted = int(data[5])
wicketsFallen = int(data[6])

runs_left = target - score
balls_left = 120 - (oversCompleted*6)
wickets = 10 - wicketsFallen
crr = score/oversCompleted
rrr = (runs_left*6)/balls_left

params = {'batting_team':[battingteam],'bowling_team':[bowlingteam],'city':[city],'runs_left':[runs_left],'balls_left':[balls_left],'wickets':[wickets],'total_runs_x':[target],'crr':[crr],'rrr':[rrr]}

input_df = pd.DataFrame(params)
result = fm.predict_proba(input_df)
loss = result[0][0]
win = result[0][1]
print(battingteam + "- " + str(round(win*100)) + "%")
print(bowlingteam + "- " + str(round(loss*100)) + "%")
