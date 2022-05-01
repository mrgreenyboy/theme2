using System;
using System.IO;
using UnityEngine;
using UnityEngine.UI;

public class UserDataCRU : MonoBehaviour
{
    [SerializeField] private UserInfo _UserInfo = new UserInfo();
    public GameObject UserNameField;
    public GameObject UserScoresField;
    public GameObject modalUsernameField;
    private string _jsonString;
    private string _emptyFieldValue = "[ can`t find data ]";

    public void Start()
    {
        ReadAndDisplayUserData();
    }

    public void Update()
    {
        ReadAndDisplayDataFromPlayerPrefs();
    }

    public void SaveUserDataInJSON()
    {
        string newUsername = UserNameField.GetComponent<Text>().text;
        string newUserScores = UserScoresField.GetComponent<Text>().text;

        _UserInfo.UserName = newUsername;
        _UserInfo.Scores = newUserScores;

        string data = JsonUtility.ToJson(_UserInfo);
        
        PlayerPrefs.SetString("username", newUsername);

        if (Application.platform == RuntimePlatform.Android)
        {
            File.WriteAllText(Application.persistentDataPath + "/UserData.json", data);
        }
        else
        {
            File.WriteAllText(Application.dataPath + "/UserData.json", data);
        }
    }

    void SetData(GameObject gameField, string data)
    {
        gameField.GetComponent<Text>().text = "";
        gameField.GetComponent<Text>().text = data;
    }

    public void ReadAndDisplayUserData()
    {
        try
        {
            if (Application.platform == RuntimePlatform.Android)
            {
                _jsonString = File.ReadAllText(Application.persistentDataPath + "/UserData.json");
            }
            else
            {
                _jsonString = File.ReadAllText(Application.dataPath + "/UserData.json");
            }

            UserInfo data = JsonUtility.FromJson<UserInfo>(_jsonString);

            if (data.UserName == "")
            {
                SetData(UserNameField, _emptyFieldValue);
            }
            else
            {
                SetData(UserNameField, data.UserName);
            }

            if (data.Scores == "")
            {
                SetData(UserScoresField, _emptyFieldValue);
            }
            else
            {
                SetData(UserScoresField, data.Scores);
            }

        }
        catch (Exception error)
        {
            UserNameField.GetComponent<Text>().text = error.Message;
        }
    }

    public void ReadAndDisplayDataFromPlayerPrefs()
    {
        string username = PlayerPrefs.GetString("username");

        if(username == "")
        {
            SetData(UserNameField, _emptyFieldValue);
        }
        else
        {
            SetData(UserNameField, PlayerPrefs.GetString("username"));
        }
       
    }
}

[System.Serializable]
public class UserInfo
{
    public string UserName;
    public string Scores;
}