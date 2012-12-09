using System;  
using System.Collections.Generic;  
using System.ComponentModel;  
using System.Data;  
using System.Drawing;  
using System.Text;  
using System.Windows.Forms;  
using System.IO;  
using System.Security.Cryptography;
using System.Runtime.Serialization.Formatters.Binary;
using System.Runtime.Serialization;
using System.Collections; 

namespace ForGet
{
    //主数据模块控制类
    public class SuperModuler
    {
        //构造函数,默认使用"forget.dat"
        public SuperModuler(string a = "forget.dat")
        {
            aim = a;
        }
        //串行化输出,使数据转化为二进制
        public void Serialize(){
            FileStream fs = new FileStream(aim, FileMode.Create);
            BinaryFormatter formatter = new BinaryFormatter();
            try
            {
                formatter.Serialize(fs, DomainPass);
            }

            catch (SerializationException e)
            {
                MessageBox.Show("Failed to serialize. Reason: " + e.Message);

                throw;

            }
            finally
            {
                fs.Close();
            }  
        }

        //串行化读取
        public void Deserialize(){
            FileStream fs = new FileStream(aim, FileMode.Open);  
            try  
            {  
                BinaryFormatter formatter = new BinaryFormatter();  
                DomainPass = (Dictionary<string,string>)formatter.Deserialize(fs);
            }  
            catch (SerializationException e)  
            {  
                MessageBox.Show("Failed to deserialize. Reason: " + e.Message);  
                throw;  
            }  
            finally  
            {  
                fs.Close();
            }
         
        }

        public SuperModuler(){
            Deserialize();
        }
        
        //析构函数,不过貌似C#下没有这么个名字,而是比这好听的多
        ~SuperModuler() {
            Serialize();
        }

        //设置KV值
        public bool set(string domain, string pass) {
            if(DomainPass.ContainsKey(domain))
                return false;
            else
                DomainPass.Add(domain, pass);
            return true;
        }
        
        //获取KV值
        public string get(string domain) {
            if (DomainPass.ContainsKey(domain))
                return DomainPass[domain];
            else
                return "";
        }

        //使用Dictionary类型,用字符串索引字符串.
        private Dictionary<string, string> DomainPass = new Dictionary<string,string>();
        
        //保存数据的文件
        private string aim;
    }
}
