using PlayFab;
using PlayFab.ClientModels;
using System;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class PlayerFabHelloWorld : MonoBehaviour
{
    public GameObject usernameField;
    public GameObject userScores;
    public GameObject leaderboardPanel;
    public GameObject listingPrefab;
    public Transform listingContainer;

    void Start()
    {
        Login();
    }

    void Login()
    {
        try
        {
            var request = new LoginWithCustomIDRequest
            {
                CustomId = SystemInfo.deviceUniqueIdentifier,
                CreateAccount = true,
            };

            PlayFabClientAPI.LoginWithCustomID(request, OnSucces, OnError);

            SendLeaderboard(int.Parse(userScores.GetComponent<Text>().text));
        }
        catch (Exception e)
        {
            Debug.Log("Unauthorize mode");
        }
    }

    void OnSucces(LoginResult loginResult)
    {
        GetLeaderboard();
    }

    void OnError(PlayFabError error)
    {
        Debug.LogError(error.GenerateErrorReport());
    }

    void OnDisplayName(UpdateUserTitleDisplayNameResult result)
    {
        Debug.Log(result.DisplayName + " - is your name");
    }

    #region Leaderboard
    public void GetLeaderboard()
    {
        var requestLeader = new GetLeaderboardRequest { StartPosition = 0, StatisticName = "PLayerHighScore", MaxResultsCount = 20 };
        PlayFabClientAPI.GetLeaderboard(requestLeader, OnGetLeaderboard, OnErrorLeaderboard);
    }

    void OnGetLeaderboard(GetLeaderboardResult result)
    {
        try
        {
            for (int i = listingContainer.childCount - 1; i >= 0; i--)
            {
                Destroy(listingContainer.GetChild(i).gameObject);
            }

            LoadLeaderboard();
        }
        catch (Exception e)
        {
            Debug.Log("Nothing to delete from leaderboard");
            LoadLeaderboard();
        }

        void LoadLeaderboard()
        {
            foreach (PlayerLeaderboardEntry player in result.Leaderboard)
            {
                GameObject tempListing = Instantiate(listingPrefab, listingContainer);
                LeaderboardListing leaderboardListing = tempListing.GetComponent<LeaderboardListing>();

                leaderboardListing.playerNameText.text = player.DisplayName;
                leaderboardListing.playerScoreText.text = player.StatValue.ToString();
            }
        }
    }

    void OnErrorLeaderboard(PlayFabError error)
    {
        Debug.LogError(error.GenerateErrorReport());
    }

    public void SendLeaderboard(int scores)
    {
        var request = new UpdatePlayerStatisticsRequest
        {
            Statistics = new List<StatisticUpdate>
            {
                new StatisticUpdate
                {
                    StatisticName = "PLayerHighScore",
                    Value = scores
                }
            }
        };

        PlayFabClientAPI.UpdatePlayerStatistics(request, OnLeaderBoardUpdate, OnError);

        void OnLeaderBoardUpdate(UpdatePlayerStatisticsResult result)
        {
            GenerateUserResult();
        }

        void GenerateUserResult()
        {
            string username = PlayerPrefs.GetString("username");
            PlayFabClientAPI.UpdateUserTitleDisplayName(new UpdateUserTitleDisplayNameRequest { DisplayName = username }, OnDisplayName, OnError);
        }

    }
    #endregion Leaderboard
}
