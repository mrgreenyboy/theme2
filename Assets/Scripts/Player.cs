using System.Collections;
using UnityEngine;
using System;
using System.Collections.Generic;
using System.IO;
using UnityEngine.Analytics;
using UnityEngine.UI;


enum GameSoundState
{
    GAMEOVER,
    MAINTHEME
}

public class Player : MonoBehaviour
{
    public float force;
    public float waitTime;
    public Rigidbody2D PlayerModel;
    public GameObject RestartButton;
    public GameObject GoToMenu;
    public GameObject Image;
    public GameObject TopDarkTexture;
    public GameObject BottomDarkTexture;
    public GameObject ParticalEffect;
    public GameObject MainSoundObject;
    public GameObject GameOverSoundObject;
    public GameObject Scores;
    private AudioSource MainSound;
    private AudioSource GameOverSound;
    private ParticleSystem flame;

    void Start()
    {
        Time.timeScale = 1;
        PlayerModel = GetComponent<Rigidbody2D>();
        MainSound = MainSoundObject.GetComponent<AudioSource>();
        GameOverSound = GameOverSoundObject.GetComponent<AudioSource>();

        AnalyticsResult analyticsResult = Analytics.CustomEvent("StartGame",
            new Dictionary<string, object>
            {
                {"State", "Start game" },
                {"UserName", PlayerPrefs.GetString("username") }
            });

        PlaySound(GameSoundState.MAINTHEME);
    }

    void PlaySound(GameSoundState state)
    {
        switch (state)
        {
            case GameSoundState.MAINTHEME:
                MainSound.Play();
                break;
            case GameSoundState.GAMEOVER:
                MainSound.Stop();
                GameOverSound.Play();
                break;
        }
    }

    void Update()
    {
        if (Input.GetMouseButtonDown(0))
        {
            PlayerModel.velocity = Vector2.up * force;

            flame = ParticalEffect.GetComponent<ParticleSystem>();
            flame.Play();
            StopParticleEffect();
        }
    }

    IEnumerator StopParticleEffect()
    {
        yield return new WaitForSeconds(0.2f);
        flame.Stop();
    }

    private void OnCollisionEnter2D(Collision2D collision)
    {
        if (collision.collider.tag == "Enemy")
        {
            Destroy(gameObject);
            Time.timeScale = 0;

            PlaySound(GameSoundState.GAMEOVER);

            RestartButton.SetActive(true);
            GoToMenu.SetActive(true);
            Image.SetActive(true);

            TopDarkTexture.SetActive(true);
            BottomDarkTexture.SetActive(true);
        }
    }
}
